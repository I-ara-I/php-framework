# Version 0.1.0

# ENGLISH

## Callable functions:

**Callable when inherited from the Base, Model, View or Controller classes**

| Function                       | Description                           |
| ------------------------------ | ------------------------------------- |
| loadSystem(string \$className) | Returns the called system object      |
| loadModel(string \$className)  | Returns the called model object       |
| getUrl()                       | Returns the URL from the config files |

**Callable when inherited from the Model class**

| Function  | Description          |
| --------- | -------------------- |
| loadPDO() | Returns a PDO object |

**Object View:**

| Function                                           | Description                      |
| -------------------------------------------------- | -------------------------------- |
| render(string/array $template, [array $data = []]) | Loads the given template file(s) |

**Object Parameter:**

| Function                 | Description                      |
| ------------------------ | -------------------------------- |
| getParamter([int $mode]) | Loads the given template file(s) |

---

# GERMAN

## Aufrufbare Funktionen:

**Aufrufbar wenn von den Klassen Base, Model, View oder Controller geerbt wird**

| Funktion                       | Beschreibung                               |
| ------------------------------ | ------------------------------------------ |
| loadSystem(string \$className) | Gibt das aufgerufene System-Objekt zurück  |
| loadModel(string \$className)  | Gibt das aufgerufene Model-Objekt zurück   |
| getUrl()                       | Gibt die URL aus der Config-Dateien zurück |

**Abrufbar wenn von der Klasse Model gerbt wird:**

| Funktion  | Beschreibung               |
| --------- | -------------------------- |
| loadPDO() | Gibt ein PDO-Objekt zurück |

**Objekt View:**

| Funktion                                           | Beschreibung                           |
| -------------------------------------------------- | -------------------------------------- |
| render(string/array $template, [array $data = []]) | Lädt die überegebene Template-Datei(n) |

**Objekt Paramterter:**

| Funktion                 | Beschreibung                          |
| ------------------------ | ------------------------------------- |
| getParamter([int $mode]) | Gibt die Parameter aus der URL zurück |
