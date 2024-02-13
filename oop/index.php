<?php
declare(strict_types=1);

// * Auto import classes ->
spl_autoload_register(function (string $class) {
  $formatedClass = str_replace('\\', '/', $class);
  $path = "{$formatedClass}.php";
  require_once $path;
});

// ? Acount class now placed in App namespace
use App\{ Account, SocialMedia, CurrentWeek} ;

$socialMedia = new SocialMedia('telegram', '@yevhen-d');
$myAccount = new Account('Yevhen Dovhan', 30000, $socialMedia);
// $myUtility = new Utility();

// ? If value myAccount = null calling php will prevent calling object method
// ? also chain methods because of return $this inside of a method
$myAccount?->deposit(5000)->deposit(1000);

$currentWeek = new CurrentWeek();
foreach ($currentWeek as $key => $value) {
  var_dump($key, $value);
  echo '</br>';
}

// var_dump($myAccount::INTEREST_RATE);
// $myUtility->printAnArray([]);

// try {
//   Utility::printAnArray([]);
// } catch (\Throwable $e) {
//   echo $e->getMessage();
// }
