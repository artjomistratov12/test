<?
echo 'Php-lint start...';
$path = exec('pwd');
exec("cd $path/local/php-tooling && php ./vendor/bin/phpcs ../../ --colors", $output);
echo implode("\n", $output);
?>