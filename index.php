<?php 
require_once 'includes/head.php';
require_once 'includes/nav.php';
?>

        <div class="box_item" id="main-doc">
            <section class="main-section" id="Introduction_to_PHP">
                <header id="head-sec">Introduction to PHP</header>
                <p>PHP stands to (PHP: Hypertext Preprocessor)  is a widely-used open source general-purpose scripting language 
                    that is especially suited for web development and can be embedded into HTML.
                </p>
                <p>Anything. PHP is mainly focused on server-side scripting, 
                    so you can do anything any other CGI program can do, such as collect form data, generate dynamic page content, 
                    or send and receive cookies. But PHP can do much more.</p>
                <p>There are three main areas where PHP scripts are used.</p>
                <ul>
                    <li>Server-side scripting. This is the most traditional and main target field for PHP. You need three things to make this work: the PHP parser (CGI or server module), a web server and a web browser. You need to run the web server, with a connected PHP installation. You can access the PHP program output with a web browser, viewing the PHP page through the server. All these can run on your home machine if you are just experimenting with PHP programming. See the installation instructions section for more information.</li>
                    <li>Command line scripting. You can make a PHP script to run it without any server or browser. You only need the PHP parser to use it this way. This type of usage is ideal for scripts regularly executed using cron (on *nix or Linux) or Task Scheduler (on Windows). These scripts can also be used for simple text processing tasks. See the section about Command line usage of PHP for more information.</li>
                    <li>Writing desktop applications. PHP is probably not the very best language to create a desktop application with a graphical user interface, but if you know PHP very well, and would like to use some advanced PHP features in your client-side applications you can also use PHP-GTK to write such programs. You also have the ability to write cross-platform applications this way. PHP-GTK is an extension to PHP, not available in the main distribution. If you are interested in PHP-GTK, visit » its own website.</li>
                </ul>
                <p><strong>Here’s the first php program:- </strong></p>
                <p>You can download and install XAMPP for Windows then save file with .php extention then write this code in this file:</p>
<pre>
    <code>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Example&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;

                &lt;?php
                    echo "Hello, I love coding";
                ?&gt;

           &lt;/body&gt;
        &lt;/html&gt;
    </code>
</pre>


                <p>The best things in using PHP are that it is extremely simple for a newcomer, 
                    but offers many advanced features for a professional programmer. Don't be afraid reading the long list of PHP's features. 
                    You can jump in, in a short time, and start writing simple scripts in a few hours.
                </p>
            </section>
            <section class="main-section" id="PHP_primitive_types">
                <header>PHP primitive types</header>
                <p>
                    PHP supports ten primitive types.
                    Four scalar types:
                </p>
                <ul>
                    <li>bool</li>
                    <li>int</li>
                    <li>float (floating-point number, aka double)</li>
                    <li>string</li>
                </ul>
                <p>
                    Four compound types:
                </p>
                <ul>
                    <li>array</li>
                    <li>object</li>
                    <li>callable</li>
                    <li>iterable</li>
                </ul>
                <p>
                    And finally two special types:
                </p>
                <ul>
                    <li>resource</li>
                    <li>NULL</li>
                </ul>
                <p><strong>Example for boolean, string, int and float types: </strong></p>
<pre>
   <code>
       &lt;?php

           &#36;var_bool = TRUE;   // a boolean
           &#36;var_str  = "foo";  // a string
           &#36;var_int = 12;     // an integer 
           &#36;var_float = 1.234;  // a float

       ?&gt;
   </code>
</pre>
                <p>
                    Some references to the type "double" may remain in the manual. Consider double the same as float; the two names exist only for historic reasons.
                    The type of a variable is not usually set by the programmer; rather,
                    it is decided at runtime by PHP depending on the context in which that variable is used.
                </p>
                <p><strong>Example for array type: </strong></p>
<pre>
   <code>

       &lt;?php
           &#36;first_array = array(
               "foo" =&#36; "bar",
               "bar" =&#36;  "foo",
           );

           &#36;second_array = [
               "foo" =&#36; 12,
               "bar" =&#36; 35s,
           ];
       ?&gt;
   </code>
</pre>
                <p>
                    Some advantages for the php array:- 
                </p>
                <ul>
                    <li>1. Multiple values under one name</li>
                    <li>2. Endorse data structure implementation</li>
                    <li>3. Matrix representation</li>
                    <li>4. Easy to remember</li>
                    <li>5. Less memory utilization</li>
                </ul>
                <p>To work with PHP array you are supposed to know a few basic things about programming like how the values are getting
                     assigned to the array, how should he call them and so on.  In order to implement the data structure using an array,
                    one must need to be cognizant about the data structure part along with the working notion of an array.
                </p>
            </section>
            <section class="main-section" id="Variables">
                <header>Variables</header>
                <p>
                    Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.
                </p>
                <h2>Example for Variables</h2>
<pre>
    <code>

        &lt;?php
            &#36;name = 'Abdallah';
            &#36;age = 26;
            echo "The age of " + &#36;name + " is " + &#36;age;
        ?&gt;
    </code>
</pre>
                <p>PHP provides a large number of predefined variables to any script which it runs. Many of these variables, however,
                    cannot be fully documented as they are dependent upon which server is running, the version and setup of the server,
                    and other factors. Some of these variables will not be available when PHP is run on the command line.
                </p>
                <h2>Rules for PHP variables:</h2>
                <ul>
                    <li>Starts with the $ sign, followed by the name of the variable</li>
                    <li>Start with a letter or the underscore character</li>
                    <li>Cannot start with a number</li>
                    <li>Can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
                    <li>Variable names are case-sensitive - $name !=  $Name</li>
                </ul> 
                <p>
                    PHP is a Loosely Typed Language
                    PHP automatically associates a data type to the variable,
                    depending on its value. Since the data types are not set in a strict sense,
                    you can do things like adding a string to an integer without causing an error.
                </p>
                <h2>PHP has three different variable scopes:</h2>
                <ul>
                    <li>local</li>
                    <li>global</li>
                    <li>static</li>
                </ul>
                <h2>Example for local , global and static</h2>
<pre>
    <code>
        &lt;?php
            $age = 5; // global scope

            function fun1() { 
              echo "&lt;p&gt;Variable age: $x&lt;/p&gt;"; //using $age inside occuring and error
            } 
            function fun2() {
              $local_age = 5; // local scope
              echo "&lt;p&gt;Variable local_age inside function is: $local_age&lt;/p&gt;";
            }
            function fun3() { /// Using static variable in fun3
               static $num = 0;
               $num++;
               echo $num;

            }
            fun3();
        ?&gt;
    </code>
</pre>
                <p>You separate the code responsible for logic and the code responsible for displaying the file. 
                    This is called the separation of concerns (SoC) in programming.
                </p>
            </section>
            <section class="main-section" id="Constants">
                <header>Constants</header>
                <p>A constant is an identifier (name) for a simple value. As the name suggests, 
                    that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). 
                    Constants are case-sensitive. By convention, constant identifiers are always uppercase.
                </p>
                <h2>Example for constants:- </h2>
<pre>
   <code>
       &lt;?php
          const MIN_VALUE = 0.0;
          define("PASS",     "62gDDEfc2e94");

       // Constant arrays
       define('NAMES', array(
           'ali',
           'mohamed',
           'gamal'
       ));
       echo NAMES[1]; // outputs "cat"
       ?&gt;
   </code>
</pre>
                <h2>Example for magic constants:-</h2>
                <ul>
                    <li><strong>__LINE__ :- </strong>The current line number of the file.</li>
                    <li><strong>__FILE__ :- </strong>The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.</li>
                    <li><strong>__NAMESPACE__ :- </strong>The name of the current namespace.</li>
                    <li><strong>__METHOD__ :- </strong>The class method name.</li>
                    <li><strong>__FUNCTION__ :- </strong>The function name, or {closure} for anonymous functions.</li>
                 </ul>
                <p>
                    The value of a constant is accessed simply by specifying its name. Unlike variables,
                    a constant is not prepended with a $. It is also possible to use the constant() function to read a constant's value 
                    if the constant's name is obtained dynamically. Use get_defined_constants() to get a list of all defined constants.
                </p>
                
            </section>
            <section class="main-section" id="Expressions">
                <header>Expressions</header>
                <p>Expressions are the most important building blocks of PHP. In PHP, almost anything you write is an expression. 
                    The simplest yet most accurate way to define an expression is "anything that has a value".
                    The most basic forms of expressions are constants and variables. When you type "$a = 5", you're assigning '5' into $a. '5', obviously,
                    has the value 5, or in other words '5' is an expression with the value of 5 (in this case, '5' is an integer constant).
                </p>
                <h2>Example for Expressions:- </h2>
<pre>
   <code>
       &lt;?php
          $x=20; //20 is an expression
          $a=$b+$c; //b+$c is an expression
          $c=add($a,$b); //add($a,$b) is an expresson
          $val=sqrt(100); //sqrt(100) is an expression
          $var=$x!=$y; //$x!=$y is an expression
       ?&gt;
   </code>
</pre>
                <h2>$first ? $second : $third</h2>
                <p>If the value of the first subexpression is true (non-zero), 
                    then the second subexpression is evaluated, and that is the result of the conditional expression. Otherwise, 
                    the third subexpression is evaluated, and that is the value.
                </p>
                <p>PHP provides a full and powerful implementation of expressions.</p>
            </section>
            <section class="main-section" id="Operators">
                <header>Operators</header>
                <p>An operator is something that takes one or more values (or expressions, in programming jargon) 
                    and yields another value (so that the construction itself becomes an expression).
                    Operators can be grouped according to the number of values they take. Unary operators take only one value, 
                    for example ! (the logical not operator) or ++ (the increment operator). Binary operators take two values, 
                    such as the familiar arithmetical operators + (plus) and - (minus), and the majority of PHP operators fall into this category. 
                    Finally, there is a single ternary operator, ? :, which takes three values;this is usually referred to 
                    simply as "the ternary operator" (although it could perhaps more properly be called the conditional operator).</p>
                <h2>When you are using operators you must know some concepts:- </h2>
                <ul>
                    <li>Precedence  Operator</li>
                    <li>Arithmetic Operator</li>
                    <li>Assignment Operator</li>
                    <li>Bitwise Operator</li>
                    <li>Comparison Operator</li>
                    <li>Incrementing Operator</li>
                    <li>Decrementing Operator</li>
                    <li>Logical Operator</li>
                    <li>Type Operator</li>
                    <li>Error and Execution Operator</li>
                    <li></li>
                </ul>
               
<h2>Example for Operators- </h2>
<pre>
   <code>
       &lt;?php
            /// Precedence  Operator
            $n1 = 10;
            $n2 = 5;
            $n3 = 2;

            $ans = $n1 + $n2 * $n3;

            echo "$n1 + $n2 * $n3 = $ans<br />";

            $ans = ($n1 + $n2) * $n3;

            echo "($n1 + $n2) * $n3 = $ans<br />";

            //Arithmetic Operator
            echo (5 % 3)."\n";           // prints 2
            echo (5 % -3)."\n";          // prints 2
            echo (-5 % 3)."\n";          // prints -2
            echo (-5 % -3)."\n";         // prints -2

            ///Assignment Operator
            $a = ($b = 4) + 5; // $a is equal to 9 now, and $b has been set to 4.

            ////Bitwise operators allow evaluation and manipulation of specific bits within an integer.
            //---------     ---------  -- ---------
            /// result        value      op test
            /// ---------     ---------  -- ---------
             ////Bitwise AND
            ( 0 = 0000) = ( 0 = 0000) & ( 5 = 0101)
            ( 1 = 0001) = ( 1 = 0001) & ( 5 = 0101)
            ( 0 = 0000) = ( 2 = 0010) & ( 5 = 0101)
            ( 4 = 0100) = ( 4 = 0100) & ( 5 = 0101)
            ( 0 = 0000) = ( 8 = 1000) & ( 5 = 0101)

             /////Bitwise Inclusive OR
            ( 5 = 0101) = ( 0 = 0000) | ( 5 = 0101)
            ( 5 = 0101) = ( 1 = 0001) | ( 5 = 0101)
            ( 7 = 0111) = ( 2 = 0010) | ( 5 = 0101)
            ( 5 = 0101) = ( 4 = 0100) | ( 5 = 0101)
            (13 = 1101) = ( 8 = 1000) | ( 5 = 0101)

            ///// Bitwise Exclusive OR (XOR)
            ( 5 = 0101) = ( 0 = 0000) ^ ( 5 = 0101)
            ( 4 = 0100) = ( 1 = 0001) ^ ( 5 = 0101)
            ( 7 = 0111) = ( 2 = 0010) ^ ( 5 = 0101)
            ( 1 = 0001) = ( 4 = 0100) ^ ( 5 = 0101)
            (13 = 1101) = ( 8 = 1000) ^ ( 5 = 0101)

            ///Comparison Operators ¶

            $action = $_POST['action'] ?? 'default';

            ///String Operators 
            $a = "Hello ";
            $b = $a . "World!"; // now $b contains "Hello World!"

            $a = "Hello ";
            $a .= "World!";     // now $a contains "Hello World!"


       ?&gt;
   </code>
</pre>
                <p>
                    Operators indicate compiler which operation to perform. Operators help to perform various calculations on the given data.
                    These are the different types of operators used in PHP according to the requirements for providing users the better facilities.
                    Users can take actions according to the result of different operators.
                </p>
            </section>
            <section class="main-section" id="Control_Structures">
                <header>Control Structures</header>
                <p>
                    Any PHP script is built out of a series of statements. 
                    A statement can be an assignment, a function call, a loop,
                    a conditional statement or even a statement that does nothing (an empty statement). Statements usually end with a semicolon. 
                    In addition, statements can be grouped into a statement-group by encapsulating a group of statements with curly braces.
                    A statement-group is a statement by itself as well. The various statement types are described in this chapter.
                </p>
                <h2>Table of Contents</h2>
                <ul>
                    <li>if</li>
                    <li>else</li>
                    <li>elseif/else if</li>
                    <li>Alternative syntax for control structures</li>
                    <li>while</li>
                    <li>do-while</li>
                    <li>for</li>
                    <li>foreach</li>
                    <li>break</li>
                    <li>continue</li>
                    <li>switch</li>
                    <li>match</li>
                    <li>declare</li>
                    <li>return</li>
                    <li>require</li>
                    <li>include, require_once, include_once</li>
                    <li>goto</li>
                </ul>
                <h2>Example for control structures:- </h2>
<pre><code>
    &lt;?php

         if ($x === $y) {
            echo "x is equal to  y";
         } elseif ($x > $y) {
            echo "x is greater than y";
         } else {
           echo "x is smaller than y";
         }
         $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
         foreach ($arr as $val) {
             if ($val == 'stop') {
                 break;    /* You could also write 'break 1;' here. */
             }
             echo "$val<br />\n";
         }
    ?&gt;
</code></pre>
                
            </section>
            <section class="main-section" id="Functions">
                <header>Functions</header>
                <p></p>
                <p>Types of functions</p>
                <ul>
                    <li>User-defined functions</li>
                    <li>Function arguments</li>
                    <li>Returning values</li>
                    <li>Variable functions</li>
                    <li>Internal (built-in) functions</li>
                    <li>Anonymous functions</li>
                    <li>Arrow Functions</li>
                </ul>
                <h2>Example for PHP  functions</h2>
<pre>
     <code> 

         ///User-defined functions
         &lt;?php
            function printHello() {
                echo "Hello";
            }
         ?&gt;
            printHello(); /// Call the function

            function small_numbers() {
                return [0, 1, 2];
            }
            //Ex. for Variable functions
            function foo() {
                echo "In foo()<br />\n";
            }

            $func = 'foo';
            $func();        // This calls foo()

          ?&gt;
     </code>
</pre>
                <h2>Internal (built-in) functions</h2>
                <p>
                    PHP comes standard with many functions and constructs. There are also functions that require specific PHP extensions compiled in,
                    otherwise fatal "undefined function" errors will appear. For example, to use image functions such as imagecreatetruecolor(), 
                    PHP must be compiled with GD support. Or, to use mysqli_connect(), PHP must be compiled with MySQLi support. 
                    There are many core functions that are included in every version of PHP, such as the string and variable functions. 
                    A call to phpinfo() or get_loaded_extensions() will show which extensions are loaded into PHP. 
                    Also note that many extensions are enabled by default and that the PHP manual is split up by extension. See the configuration, 
                    installation, and individual extension chapters, for information on how to set up PHP.
                </p>
                <h2>Example for PHP  (built-in) and Arrow functions and </h2>
<pre>
     <code> 

         ///User-defined functions (string)
         &lt;?php
            function trimOffFront( $off, $str ) {
                if( is_numeric( $off ) )
                    return substr( $str, $off );
                else
                    return substr( $str, strlen( $off ) );
            }
            ///Arrow functions capture variables by value automatically
            $y = 1;
            $fn1 = fn($x) => $x + $y;
            // equivalent to using $y by value:
            $fn2 = function ($x) use ($y) {
                return $x + $y;
            };

            var_export($fn1(3));
          ?&gt;
     </code>
</pre>
                <p>
                    The real power of PHP comes from its functions.
                    PHP has more than 1000 built-in functions, and in addition you can create your own custom functions. 
                </p>
            </section>
            <section class="main-section" id="Classes_and_Objects">
                <header>Classes_and_Objects</header>
                <p>
                    PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, 
                    additional magic methods, interfaces, and cloning. PHP treats objects in the same way as references or handles, 
                    meaning that each variable contains an object reference rather than a copy of the entire object. See Objects and References
                </p>
                <p>
                    <strong>class: </strong> Basic class definitions begin with the keyword class, followed by a class name, 
                    followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.
                </p>
                <p>Table of Contents</p>
                <ul>
                    <li>Introduction</li>
                    <li>The Basics</li>
                    <li>Properties</li>
                    <li>Class Constants</li>
                    <li>Autoloading Classes</li>
                    <li>Constructors and Destructors</li>
                    <li>Visibility</li>
                    <li>Object Inheritance</li>
                    <li>Scope Resolution Operator (::)</li>
                    <li>Static Keyword</li>
                    <li>Class Abstraction</li>
                    <li>Object Interfaces</li>
                    <li>Traits</li>
                    <li>Anonymous classes</li>
                    <li>Overloading</li>
                    <li>Object Iteration</li>
                    <li>Magic Methods</li>
                    <li>Final Keyword</li>
                    <li>Object Cloning</li>
                    <li>Comparing Objects</li>
                    <li>Late Static Bindings</li>
                    <li>Objects and references</li>
                    <li>Object Serialization</li>
                    <li>Covariance and Contravariance</li>
                    <li>OOP Changelog</li>
                </ul>

                <h2>Code for Simple Class and </h2>
<pre>
     <code>  
      &lt;?php
        class SimpleClass {
            // property declaration
            public $var = 'a default value';

            // method declaration
            public function displayVar() {
                echo $this->var;
            }
        }
        class Test
        {
            static public function getNew()
            {
                return new static;
            }
        }

        class Child extends Test
        {}

        $obj1 = new Test();
        $obj2 = new $obj1;
        var_dump($obj1 !== $obj2);

        $obj3 = Test::getNew();
        var_dump($obj3 instanceof Test);

        $obj4 = Child::getNew();
        var_dump($obj4 instanceof Child);

        ?&gt;  

     </code>
</pre>
                
                <h2>Properties</h2>
                <p>
                    Class member variables are called properties. They may be referred to using other terms such as fields, but for the purposes of 
                    this reference properties will be used. They are defined by using one of the keywords public, protected, or private, optionally,
                    as of PHP 7.4, followed by a type declaration, followed by a normal variable declaration. 
                    This declaration may include an initialization, but this initialization must be a constant value.
                </p>
                <h2>Code to explain Properties of the class</h2>
<pre>
     <code>    


         &lt;?php

            ////Property declarations
            class SimpleClass
            {
               public $var1 = 'hello ' . 'world';
               public $var2 = &lt;&lt;&lt;EOD
            hello world
            EOD;
               public $var3 = 1+2;
               // invalid property declarations:
               public $var4 = self::myStaticMethod();
               public $var5 = $myVar;

               // valid property declarations:
               public $var6 = myConstant;
               public $var7 = [true, false];

               public $var8 = &lt;&lt;&lt;'EOD'
            hello world
            EOD;
            }
         ?&gt;

         ///////Example of typed properties

         class User
         {
             public int $id;
             public ?string $name;

             public function __construct(int $id, ?string $name)
             {
                 $this->id = $id;
                 $this->name = $name;
             }
         }

         $user = new User(1234, null);

         var_dump($user->id);
         var_dump($user->name);

         ?&gt;

     </code>
</pre>
                <p>
                    
                    <strong>Overloading</strong> in PHP provides means to dynamically create properties and methods. 
                    These dynamic entities are processed via magic methods one can establish in a class for various action types.
                    The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in 
                    the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to 
                    this combination of declaration and visibility. All overloading methods must be defined as public.
                </p>
                <h2></h2>
<pre>
    <code>

        &lt;?php
        class PropertyTest
        {
            /**  Location for overloaded data.  */
            private $data = array();

            /**  Overloading not used on declared properties.  */
            public $declared = 1;

            /**  Overloading only used on this when accessed outside the class.  */
            private $hidden = 2;

            public function __set($name, $value)
            {
                echo "Setting '$name' to '$value'\n";
                $this->data[$name] = $value;
            }

            public function __get($name)
            {
                echo "Getting '$name'\n";
                if (array_key_exists($name, $this->data)) {
                    return $this->data[$name];
                }

                $trace = debug_backtrace();
                trigger_error(
                    'Undefined property via __get(): ' . $name .
                    ' in ' . $trace[0]['file'] .
                    ' on line ' . $trace[0]['line'],
                    E_USER_NOTICE);
                return null;
            }

            public function __isset($name)
            {
                echo "Is '$name' set?\n";
                return isset($this->data[$name]);
            }

            public function __unset($name)
            {
                echo "Unsetting '$name'\n";
                unset($this->data[$name]);
            }

            /**  Not a magic method, just here for example.  */
            public function getHidden()
            {
                return $this->hidden;
            }
        }


        echo "&lt;pre?&gt;\n";

        $obj = new PropertyTest;

        $obj->a = 1;
        echo $obj->a . "\n\n";

        var_dump(isset($obj->a));
        unset($obj->a);
        var_dump(isset($obj->a));
        echo "\n";

        echo $obj->declared . "\n\n";

        echo "Let's experiment with the private property named 'hidden':\n";
        echo "Privates are visible inside the class, so __get() not used...\n";
        echo $obj->getHidden() . "\n";
        echo "Privates not visible outside of class, so __get() is used...\n";
        echo $obj->hidden . "\n";

        ?&gt;
    </code>
</pre>
                <p>
                    <strong>Object Iteration</strong> PHP provides a way for objects to be defined so it is possible to iterate through a list of items,
                    with, for example a foreach statement. By default, all visible properties will be used for the iteration.
                </p>
                <p>
                    <strong>Objects and references</strong> One of the key-points of PHP OOP that is often mentioned is that "objects are 
                    passed by references by default". This is not completely true. This section rectifies that general thought using some examples. 
                    A PHP reference is an alias, which allows two different variables to write to the same value. In PHP, an object variable doesn't 
                    contain the object itself as value. It only contains an object identifier which allows object accessors to find the actual object.
                    When an object is sent by argument, returned or assigned to another variable,
                    the different variables are not aliases: they hold a copy of the identifier, which points to the same object.
                </p>
                <p>
                    <strong>Object Serialization </strong> Serializing objects - objects in sessions
                    serialize() returns a string containing a byte-stream representation of any value that can be stored in PHP. unserialize() can use this string to recreate the original variable values.
                    Using serialize to save an object will save all variables in an object. The methods in an object will not be saved, 
                    only the name of the class.In order to be able to unserialize() an object, the class of that object needs to be defined. That is,
                    if you have an object of class A and serialize this, you'll get a string that refers to class A and contains all values of variables contained in it. 
                    If you want to be able to unserialize this in another file, an object of class A, the definition of class A must be present in that file first. 
                    This can be done for example by storing the class definition of class A in an include file and including this file or making use of 
                    the spl_autoload_register() function.
                </p>
                <h2>OOP Changelog</h2>
                <table>
                    <tr>
                        <th>Version</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>7.4.0</td>
                        <td>Changed: It is now possible to throw exception within __toString().</td>
                    </tr>
                    <tr>
                        <td>7.4.0</td>
                        <td>Added: Support for limited return type covariance and argument type contravariance.
                            Full variance support is only available if autoloading is used. Inside a single file only non-cyclic 
                            type references are possible.
                        </td>
                    </tr>
                    <tr>
                        <td>7.4.0</td>
                        <td>Added: It is now possible to type class properties.</td>
                    </tr>
                    <tr>
                        <td>7.3.0</td>
                        <td>Incompatibility: Argument unpacking of Traversables with non-int keys is no longer supported. 
                            This behaviour was not intended and thus has been removed.
                        </td>
                    </tr>
                    <tr>
                        <td>7.3.0</td>
                        <td>Incompatibility: In previous versions it was possible to separate the static properties by assigning a reference.
                            This has been removed.
                        </td>
                    </tr>
                    <tr>
                        <td>7.3.0</td>
                        <td>Changed: The instanceof operator now allows literals as the first operand, in which case the result is always false.
</td>
                    </tr>
                    <tr>
                        <td>7.2.0</td>
                        <td>Deprecated: The __autoload() method has been deprecated in favour of spl_autoload_register().
</td>
                    </tr>
                    <tr>
                        <td>7.2.0</td>
                        <td>Changed: The following name cannot be used to name classes, interfaces, or traits: object.
</td>
                    </tr>
                    <tr>
                        <td>7.2.0</td>
                        <td>Changed: A trailing comma can now be added to the group-use syntax for namespaces.
</td>
                    </tr>
                    <tr>
                        <td>7.2.0</td>
                        <td>Changed: Parameter type widening. Parameter types from overridden methods and from interface implementations may now be omitted.
</td>
                    </tr>
                    <tr>
                        <td>7.2.0</td>
                        <td>Changed: Abstract methods can now be overridden when an abstract class extends another abstract class.
</td>
                    </tr>
                </table>
                

            </section>
    </div>
        
    </div>
<?php 
require_once 'includes/footer.php';
?>