# johnlib
>a change in reality occurred in the 203rd decade in which "marketing" via "john" began to exist. this was retroactively neologized into "johnvertisement".
>
>what's different about johnvertisement is that instead of harvesting the soul of those involved via crude and invasive strategies, it is done remotely and automatically. as such, no monetary exchanges occur in the process of johnvertisement; the value gained by soul extraction covers all relevant costs.
>
>johnvertisement is now in use by a certain number of people and is an X billion dollar industry, where X is a real number within the range 0-65535. there is a wide variety of johnvertisements in existence.
>
>the identity of john has been discovered. it is confidential information.

[johnvertisment homepage](https://john.citrons.xyz/)

johnlib is an "api" for johnvertisments that allows for more johnvertisment customizability.

note:

johnlib requires PHP DOM. it can be installed wtih `apt install php8.X-xml`. it is included by default on windows, but must be enabled in your php.ini.

installation:

run `composer require breadtf/johnlib` to install johnlib. you can also directly download `johnlib.php` and manually `require_once` it into your project

usage:
```
// Create the psychic link to john
require_once 'vendor/autoload.php';
$john = new \breadtf\johnlib\johnlib();

// Summon a new johnvertisment from the all-powerful john himself
echo $john->generateJohn("example.com");
```
to get the raw john data, use the `getJohn` function instead:
```
print_r($john->getJohn("example.com"));
// Array 
// (
//     [image] => "https://john.citrons.xyz/static/abc/xyz"
//     [url] => "http://example.com"
// )
```
here is an example for using the `getJohn` output:
```
$johnData = $john->getJohn("example.com");

echo "<p> John URL is: " . $johnData["url"] . "</p>";
echo "<img src='" . $johnData["image"] . "' alt='johnvertisment'>";
```
