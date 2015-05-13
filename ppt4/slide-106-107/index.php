<?php
    $translator = array(
        "a" => "y",
        "b" => "p",
        "c" => "l",
        "d" => "t",
        "e" => "a",
        "f" => "v",
        "g" => "k",
        "h" => "r",
        "i" => "e",
        "j" => "z",
        "k" => "g",
        "l" => "m",
        "m" => "s",
        "n" => "h",
        "o" => "u",
        "p" => "b",
        "q" => "x",
        "r" => "n",
        "s" => "c",
        "t" => "d",
        "u" => "i",
        "v" => "j",
        "w" => "f",
        "x" => "q",
        "y" => "o",
        "z" => "w",
    );

    /**
     * Fonction qui permet de traduire une chaine de caractères en Al-Bhed
     *
     * @param $str
     * @param $translator
     * @return array
     */
    function translate($str,$translator,$delimiter)
    {
        $result = array();

        if ($delimiter) {
            // On utilise ici le délimiteur
            $arr = explode(".",$str);
        } else {
            // On n'utilise aucun délimiteur
            $arr = str_split($str);
        }
        foreach($arr as $value) {
            foreach($translator as $key => $translateChar) {
                if ($value === $key) {
                    array_push($result,$translateChar);
                }
            }
        }

        return $result;
    }

    /**
     * Fonction qui permet d'afficher la traduction Al-Bhed
     *
     * @param $arr
     */
    function display($arr)
    {
        $str = implode($arr);
        echo $str.'<br />';

    }
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="toTranslate" value="<?php echo isset($_POST['toTranslate']) ? $_POST['toTranslate'] : ''; ?>"/>
            <input type="submit" />
        </form>
        <?php
            if (isset($_POST['toTranslate'])) {
                $translatedWithoutDelimiter = translate($_POST['toTranslate'],$translator,false);
                display($translatedWithoutDelimiter);
            }
        ?>
    </body>
</html>
