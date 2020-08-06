# ENGLISH

## Callable functions:

**If inherited from the Base, Controller, Model or View class:**

- getParamter([int $mode])
  Returns the parameters from the URL

- loadSystem(string \$className)
  Returns the called system object

- loadModel(string \$className)
  Returns the called model object

- getUrl()
  Returns the URL from the config files

**When inherited from the Model class**

- loadPDO()
  Returns a PDO object

**Object View:**

- render(string/array $template, [array $data = []])
  Loads the given template file(s)

---

# GERMAN

## Aufrufbare Funktionen:

**Wenn von der Klasse Base, Controller, Model oder View geerbt wird:**

- getParamter([int $mode])
  Gibt die Parameter aus der URL zurück

- loadSystem(string \$className)
  Gibt das aufgerufene System-Objekt zurück

- loadModel(string \$className)
  Gibt das aufgerufene Model-Objekt zurück

- getUrl()
  Gibt die URL aus der Config-Dateien zurück

**Wenn von der Klasse Model gerbt wird:**

- loadPDO()
  Gibt ein PDO-Objekt zurück

**Objekt View:**

- render(string/array $template, [array $data = []])
  Lädt die überegebene Template-Datei(n)
