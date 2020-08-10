# Changelog

## Version 0.3.0

**English**

- ADDED: Class `Form` can be called via `$this->loadSystem('Form')`.

- ADDED: Function `Form::getInput()`. Returns the values from the global variable $_POST and the stored values from the function `Form::saveInput()` as array.

- ADDED: Function `Form::saveInput()`. Saves the values of the global variable $_POST in the current session.

- ADDED: Function `Form::unsetInput()`. Deletes the saved values of the global variable $_POST in the current session.

- REMOVED: `getUrl()`. Can no longer be called directly from the Base, Model, View and Controller classes.

- ADDED: Class `LinkMap` can be called via `$this->loadConfig('LinkMap')`.

- ADDED: Function `View::getLink($name)`. Returns the link as string from the class `Config\LinkMap`.

- ADDED: Function `View::createLink($link)`. Appends the base URL to the passed string and returns it.

**German**

- HINZUGEFÜGT: Klasse `Form` ist über `$this->loadSystem('Form')` aufrufbar.

- HINZUGEFÜGT: Funktion `Form::getInput()`. Gibt die Werte aus der globalen Varibelen $_POST und die gespeicherte Werte aus der Funktion `Form::saveInput()` als Array zurück.

- HINZUGEFÜGT: Funktion `Form::saveInput()`. Speichert die Werte der globalen Variable $_POST in der aktuellen Session ab.

- HINZUGEFÜGT: Funktion `Form::unsetInput()`. Löscht die gespicherten Werte der globalen Variable $_POST in der aktuellen Session ab.

- ENTFERNT: `getUrl()`. Ist nicht mehr direkt aus den Klassen Base, Model, View und Controller aufrufbar.

- HINZUGEFÜGT: Klasse `LinkMap` ist über `$this->loadConfig('LinkMap')` aufrufbar.

- HINZUGEFÜGT: Funktion `View::getLink($name)`. Gibt den Link als String aus der Klasse `Config\LinkMap` zurück.

- HINZUGEFÜGT: Funktion `View::createLink($link)`. Hängt dem übergebenen String die Basis-URL an und gibt diesen zurück.

---

## Version 0.2.0

**English**

- Several files refactored

- REMOVED: `getParamter([int $mode])`. Can no longer be called directly from the classes Base, Model, View and Controller.

- ADDED: Class `Parameters` can be called via `$this->loadSystem('Paramters')`.

- ADDED: Function `Parameters::getParameters($mode = 0)`. Returns the parameters from the URL as an array.

- ADDED: Function `View::getTemplate(string $template)`. Returns the defined template from the file Config\TemplateMap.php.

- ADDED: Class `TemplateMap` can be called via `$this->loadConfig('TemplateMap')`.

**German**

- Verschiedene Datein überarbeitet

- ENTFERNT: `getParamter([int $mode])`. Ist nicht mehr direkt aus den Klassen Base, Model, View und Controller aufrufbar.

- HINZUGEFÜGT: Klasse `Paramters` ist über `$this->loadSystem('Paramters')` aufrufbar.

- HINZUGEFÜGT: Funktion `Parameters::getParameters($mode = 0)`. Gibt die Parameter aus der URL als Array zurück.

- HINZUGEFÜGT: Funktion `View::getTemplate(string $template)`. Gibt das defenierte Template aus der Datei Config\TemplateMap.php zurück.

- HINZUGEFÜGT: Klasse `TemplateMap` ist über `$this->loadConfig('TemplateMap')` aufrufbar.
