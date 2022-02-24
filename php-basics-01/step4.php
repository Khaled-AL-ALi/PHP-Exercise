<?php
$name="khaled";
$position="tester";
$github_url="github.com/Khaled-AL-ALi";

echo "Hello, I'm ".$name.", I'm a ".$position." please check my github link ".$github_url ."\n";
echo "Hello, I'm {$name}, I'm a {$position} please check my github link {$github_url}\n";
echo <<< END
Hello, I'm {$name}, I'm a {$position} please check my github link {$github_url}\n
END;

?>
