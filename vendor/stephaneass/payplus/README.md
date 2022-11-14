# Payplus Package Laravel

## Description

Payplus is the easier plateform to perform online paiement with assurance

## Installation

```bash
$ composer require stephaneass/payplus
```

## In config/app.php
Add this line in your app.php file
```bash
StephaneAss\Payplus\PayplusServiceProvider::class,
```

## Publish Payplus config file

```bash
$ php artisan vendor:publish --tag=payplus-config
```

## Add your payplus credentials in .env

```json
PAYPLUS_API_KEY=**************
PAYPLUS_MODE=live/test
PAYPLUS_TOKEN=*******************************************************
PAYPLUS_APPLICATION_NAME=Testing
PAYPLUS_APPLICATION_WEBSITE_URL=your_website_url
PAYPLUS_APPLICATION_CANCEL_URL=your_cancel_url
PAYPLUS_APPLICATION_CALLBACK_URL=your_callback_url
PAYPLUS_APPLICATION_RETURN_URL=your_return_url
```

## Tutorial

## Paiement with redirect

### Sending paiement
```bash
use StephaneAss\Payplus\Pay\PayPlus;

public function sendPaiement()
{
    
    $co = (new PayPlus())->init();

    $co->addItem("Jean Gucci", 3, 150, 450, "Jean bleu, de marque Gucci");
    $co->addItem("Jean Prada", 2, 100, 200, "Jean noir, de marque Prada");
    $total_amount=100; // for test
    $co->setTotalAmount($total_amount);
    $co->setDescription("Achat de deux articles sur le site Jeans Missebo");

    $co->addCustomData('first_key',"first_value");

    // démarrage du processus de paiement
    // envoi de la requete
    if($co->create()) {
        
        // Requête acceptée, alors on redirige le client vers la page de validation de paiement
        return redirect()->to($co->getInvoiceUrl());
    }else{
        // Requête refusée, alors on affiche le motif du rejet
        return [
            "succes" => false,
            "message" => "$co->response_text"
        ];
    }
}

```

### Paiement verification (return_url page)

An token is sent back from Payplus that represent the transaction's token on Payplus side. You can use to verify transaction's state. You can also save it on your side.

```bash
public function verify($token=null)
{
    $token = blank($token) ? $_GET['token'] : trim($token);

    $co = (new PayPlus())->init();
    
    if ($co->confirm($token)) {
        // Transaction has successed
        // Perform your success logique here

        $data = $co->getCustomData('first_key');
        ...
    }else {
        // Transaction has failed
        // Perform your failed logique here
        ...
    }
}
```

## Paiement without redirect

### Sending paiement

#### .env configuration

Add this line in your .env file. By default it'is true

```bash
PAYPLUS_WITH_REDIRECT=false
```
#### In your controller
```bash
use StephaneAss\Payplus\Pay\PayPlus;

public function sendPaiementWithoutRedirect()
    {
        $co = (new PayPlus())->init();

        $co->addItem("Jean Gucci", 3, 150, 450, "Jean bleu, de marque Gucci");
        $co->addItem("Jean Prada", 2, 100, 200, "Jean noir, de marque Prada");
        $total_amount=100;
        $co->setTotalAmount($total_amount);
        $co->setDescription("Achat de deux articles sur le site Jeans Missebo");

        $co->addCustomData('first_key',"first_value");

        $co->setCustomerNumber("22967710659"); // It must be on this format 22967710659
        $co->setDevise("xof"); // By defaut, it is already on xof
        $co->setOtp(""); // Contains the otp code of the transaction (only for orange money subscribers, otherwise leave empty).

        $result = $co->launchPaiement();

        $result->token // to get the transaction token (save into your database if possible. You'll need it to make verification)
    }
```

### Paiement response data
```json
{
  "response_code" : "contient 00 si succes. si different de 00 alors echec",
  "token" : "token de la transaction. il faut la conserver sur votre plateforme",
  "response_text" : "contient l'url de la page de validation de paiement (page vers laquelle vous devez rediriger le client pour qu'il procède au paiement) ",
  "description" : "message texte décrivant le résultat de la requête",
  "customdata" : "contient les custom_data envoyées lors de l'envoie de la requête"
}
```

### In your callback

Your **your_callback_url** is importante here. Make sure you provide it. in your .env file. It's an api route. PayPlus will notice your application by this url to give you the transaction final state.

```bash
public function verifyPaiementCallback(Request $request)
{
    $response_code=$_POST['response_code'];
    $token=$_POST['token'];

    if($response_code==00){
        Transaction::where('token', $token)->update(['state'=>'validated']);
    }

}
```

### Verify a specific transaction

```bash
public function verifierPaiement(Request $request)
{
    $transaction=Transaction::find($request->transaction_id);
    
    $co = (new PayPlus())->init();

    $response = $co->confirm($transaction->token);
    
    if (!is_null($response->status) && $response->status=='completed'){
        $transaction->etat='validated';
        $transaction->save();
        ...
    } 
    else{
        $transaction->etat='failed';
        $transaction->save();
        ...
    }
}
```

### Paiement response data
```json
{
  "response_code":"contient 00 si succes. si different de 00 alors echec",
  "token" : "id de la facture. il faut la conserver sur votre plateforme",
  "response_text" : "message texte décrivant le résultat de la requête",
  "status" : "indique le statut de la requête. valeurs possibles : pending (transaction en attente de validation), completed (transaction validée), notcompleted (transaction annulée). ce champ est vide si response_code est different de 00",
  "customdata" : "contient les custom_data envoyées lors de l'envoie de la requête"
}
```