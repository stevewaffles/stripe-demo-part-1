<?php
require_once('./stripe-php/lib/Stripe.php');

$stripe = array(
  "secret_key"      => "YOUR_SECRET_KEY",
  "publishable_key" => "YOUR_PUBLIC_KEY"
);

Stripe::setApiKey($stripe['secret_key']);
?>

<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-amount="5000" data-description="One year's subscription">
    </script>
</form>
