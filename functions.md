# Version 0.3.0

## ENGLISH

### Callable functions:

**Callable when inherited from the Base, Model, View or Controller classes**

| Function                       | Description                          |
| ------------------------------ | ------------------------------------ |
| loadSystem(string \$className) | Returns the called system object     |
| loadModel(string \$className)  | Returns the called model object      |
| getUrl()                       | Returns the URL from the config file |

**Callable when inherited from the Model class**

| Function  | Description          |
| --------- | -------------------- |
| loadPDO() | Returns a PDO object |

**Class View:**

| Function                                           | Description                                                       |
| -------------------------------------------------- | ----------------------------------------------------------------- |
| render(string/array $template, [array $data = []]) | Loads the given template file(s)                                  |
| getTemplate(string $template)                      | Returns the defined template from the file Config\TemplateMap.php |

**Class Parameter:**

| Function                      | Description                         |
| ----------------------------- | ----------------------------------- |
| getParamters([int $mode = 0]) | Returns the parameters from the URL |

---

## GERMAN

### Aufrufbare Funktionen:

**Aufrufbar wenn von den Klassen Base, Model, View oder Controller geerbt wird**

| Funktion                       | Beschreibung                              |
| ------------------------------ | ----------------------------------------- |
| loadSystem(string \$className) | Gibt das aufgerufene System-Objekt zurück |
| loadModel(string \$className)  | Gibt das aufgerufene Model-Objekt zurück  |
| getUrl()                       | Gibt die URL aus der Config-Datei zurück  |

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
