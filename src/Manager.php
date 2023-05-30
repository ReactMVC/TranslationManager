<?php
/*
Name: Translation Manager
Version: 1.0.0
Developer: Hossein Pira
Email: h3dev.pira@gmail.com
*/

namespace Translation;

use Stichoza\GoogleTranslate\GoogleTranslate;

class Manager
{
  private $translator;

  public function __construct()
  {
    $this->translator = new GoogleTranslate();
  }

  public function translate($language, $inputFile, $outputFile)
  {
    $data = $this->loadJsonData($inputFile);
    $translatedData = $this->translateArrayValues($data, $language);
    $this->saveJsonData($translatedData, $outputFile);
  }

  private function loadJsonData($file)
  {
    $json = file_get_contents($file);
    return json_decode($json, true);
  }

  private function saveJsonData($data, $file)
  {
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($file, $json);
  }

  private function translateArrayValues($array, $language)
  {
    foreach ($array as &$value) {
      if (is_array($value)) {
        $value = $this->translateArrayValues($value, $language);
      } else {
        $value = $this->translator->setTarget($language)->translate($value);
      }
    }
    unset($value); // clear reference
    return $array;
  }
}