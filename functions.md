# Version 0.3.0

### Callable functions:

**Callable when inherited from the Base, Model, View or Controller classes**

| Function                                    | Description                                                     |
| ------------------------------------------- | --------------------------------------------------------------- |
| loadSystem(string \$className)              | Returns the called system object.                               |
| loadModel(string \$className)               | Returns the called model object.                                |
| loadHelper(string \$className)              | Returns the called helper object from the container.            |
| redirect(string $name, bool $useMap = true) | Redirection to the specified URL.                               |
| esc(string \$value)                         | Converts all suitable characters into corresponding HTML codes. |

**Callable when inherited from the Model class**

| Function  | Description          |
| --------- | -------------------- |
| loadPDO() | Returns a PDO object |

**Class View**

| Function                                           | Description                                                       |
| -------------------------------------------------- | ----------------------------------------------------------------- |
| render(string/array $template, [array $data = []]) | Loads the given template file(s).                                 |
| getTemplate(string \$template)                     | Returns the defined template from the file Config\TemplateMap.php |
| getLink(string \$name)                             | Returns the link as string from the class `Config\LinkMap`.       |
| createLink(string \$link)                          | Appends the base URL to the passed string and returns it.         |

**Class Parameter**

| Function                      | Description                          |
| ----------------------------- | ------------------------------------ |
| getParamters([int $mode = 0]) | Returns the parameters from the URL. |

**Class Form**

| Function     | Description                                                                                                                |
| ------------ | -------------------------------------------------------------------------------------------------------------------------- |
| getInput()   | Returns the values from the global variable \$\_POST and the stored values from the function `Form::saveInput()` as array. |
| saveInput()  | Saves the values of the global variable \$\_POST in the current session.                                                   |
| unsetInput() | Deletes the saved values of the global variable \$\_POST in the current session.                                           |
