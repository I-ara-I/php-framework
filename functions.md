# Version 0.3.0

## ENGLISH

### Callable functions:

**Callable when inherited from the Base, Model, View or Controller classes**

| Function                                    | Description                      |
| ------------------------------------------- | -------------------------------- |
| loadSystem(string \$className)              | Returns the called system object |
| loadModel(string \$className)               | Returns the called model object  |
| redirect(string $name, bool $useMap = true) | Redirection to the specified URL |

**Callable when inherited from the Model class**

| Function  | Description          |
| --------- | -------------------- |
| loadPDO() | Returns a PDO object |

**Class View:**

| Function                                           | Description                                                       |
| -------------------------------------------------- | ----------------------------------------------------------------- |
| render(string/array $template, [array $data = []]) | Loads the given template file(s)                                  |
| getTemplate(string $template)                      | Returns the defined template from the file Config\TemplateMap.php |
| getLink(string $name)                              | Returns the link as string from the class `Config\LinkMap`.       |
| createLink(string $link)                           | Appends the base URL to the passed string and returns it.         |

**Class Parameter:**

| Function                      | Description                         |
| ----------------------------- | ----------------------------------- |
| getParamters([int $mode = 0]) | Returns the parameters from the URL |

**Class Form**

| Function     | Description                                                                                                              |
| ------------ | ------------------------------------------------------------------------------------------------------------------------ |
| getInput()   | Returns the values from the global variable $_POST and the stored values from the function `Form::saveInput()` as array. |
| saveInput()  | Saves the values of the global variable $_POST in the current session.                                                   |
| unsetInput() | Clears the spiked values of the global variable $_POST in the current session                                            |

---

## GERMAN

### Aufrufbare Funktionen:

**Aufrufbar wenn von den Klassen Base, Model, View oder Controller geerbt wird**

| Funktion                       | Beschreibung                              |
| ------------------------------ | ----------------------------------------- |
| loadSystem(string \$className) | Gibt das aufgerufene System-Objekt zurück |
| loadModel(string \$className)  | Gibt das aufgerufene Model-Objekt zurück  |

**Abrufbar wenn von der Klasse Model gerbt wird:**

| Funktion  | Beschreibung               |
| --------- | -------------------------- |
| loadPDO() | Gibt ein PDO-Objekt zurück |

**Klasse View:**

| Funktion                                    | Beschreibung                                                             |
| ------------------------------------------- | ------------------------------------------------------------------------ |
| render(array $template, [array $data = []]) | Lädt die überegebene Template-Datei(n)                                   |
| getTemplate(string $template)               | Gibt das defenierte Template aus der Datei Config\TemplateMap.php zurück |

**Klasse Paramterters:**

| Funktion                      | Beschreibung                          |
| ----------------------------- | ------------------------------------- |
| getParamters([int $mode = 0]) | Gibt die Parameter aus der URL zurück |

**Klasse Form**

| Funktion     | Beschreibung                                                                                                                       |
| ------------ | ---------------------------------------------------------------------------------------------------------------------------------- |
| getInput()   | Gibt die Werte aus der globalen Varibelen $_POST und die gespeicherte Werte aus der Funktion `Form::saveInput()` als Array zurück. |
| saveInput()  | Speichert die Werte der globalen Variable $_POST in der aktuellen Session ab.                                                      |
| unsetInput() | Löscht die gespicherten Werte der globalen Variable $_POST in der aktuellen Session ab.                                            |


