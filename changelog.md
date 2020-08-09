# Changelog

## Version X

**English**

- REMOVED: `getParamter([int $mode])`
  Can no longer be called directly from the classes Base, Model, View and Controller

- ADDED: Class `Parameters` can be called via `$this->loadSystem('Paramters')`

- ADDED: Function `View::getTemplate(string $template)`. Returns the defined template from the file Config\TemplateMap.php.

- ADDED: Class `TemplateMap` can be called via `$this->loadConfig('TemplateMap')`

**German**

- ENTFERNT: `getParamter([int $mode])`
  Ist nicht mehr direkt aus den Klassen Base, Model, View und Controller aufrufbar

- HINZUGEFÜGT: Klasse `Paramters` ist über `$this->loadSystem('Paramters')` aufrufbar

- HINZUGEFÜGT: Funktion `View::getTemplate(string $template)`. Gibt das defenierte Template aus der Datei Config\TemplateMap.php zurück.

- HINZUGEFÜGT: Klasse `TemplateMap` ist über `$this->loadConfig('TemplateMap')` aufrufbar
