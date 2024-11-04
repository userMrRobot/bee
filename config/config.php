<?php
//созданы переменные пути для каждой папки

define("ROOT", dirname(__DIR__));
define("APP", ROOT . "/app");
define("CONTROLLERS", APP . "/controllers");
define("VIEWS", ROOT . "/app/views");
define("ALL", VIEWS . "/all");
define("ERRORS", VIEWS . "/errors");
define("INCS", VIEWS . "/incs");
define("CONFIG", ROOT . "/config");
define("CORE", ROOT . "/core");
define("CLASSES", CORE . "/classes");
define("COMPOSER", ROOT . "/vendor");