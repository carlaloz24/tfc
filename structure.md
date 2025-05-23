# Project Structure

barfco_new
├── .idea
│   ├── .gitignore
│   ├── barfco_new.iml
│   ├── dbnavigator.xml
│   ├── material_theme_project_new.xml
│   ├── modules.xml
│   ├── php.xml
│   ├── phpunit.xml
│   ├── vcs.xml
│   └── workspace.xml
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Auth
│   │   │   │   ├── ConfirmPasswordController.php
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   └── VerificationController.php
│   │   │   ├── ArticuloController.php
│   │   │   ├── CalculadoraController.php
│   │   │   ├── ComentarioController.php
│   │   │   ├── CondicionMascotaController.php
│   │   │   ├── Controller.php
│   │   │   ├── DietaController.php
│   │   │   ├── HomeController.php
│   │   │   ├── MascotaController.php
│   │   │   ├── PlanController.php
│   │   │   ├── ProfileController.php
│   │   │   └── UsuarioController.php
│   │   ├── Middleware
│   │   │   └── EnsureUserIsAdmin.php
│   │   └── Kernel.php
│   ├── Models
│   │   ├── Article.php
│   │   ├── Articulo.php
│   │   ├── Comentario.php
│   │   ├── CondicionMascota.php
│   │   ├── Dieta.php
│   │   ├── Mascota.php
│   │   ├── Plan.php
│   │   └── User.php
│   └── Providers
│       └── AppServiceProvider.php
├── bootstrap
│   ├── cache
│   │   ├── .gitignore
│   │   ├── packages.php
│   │   └── services.php
│   ├── app.php
│   └── providers.php
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   ├── 2025_04_14_182851_create_usuarios_table.php
│   │   ├── 2025_04_14_182852_create_mascotas_table.php
│   │   ├── 2025_04_14_183249_create_condiciones_mascotas_table.php
│   │   ├── 2025_04_14_183255_create_dietas_table.php
│   │   ├── 2025_04_14_183301_create_planes_table.php
│   │   ├── 2025_04_14_183306_create_articulos_table.php
│   │   ├── 2025_04_14_183312_create_comentarios_table.php
│   │   ├── 2025_05_01_174059_modify_dietas_table.php
│   │   ├── 2025_05_09_184945_add_id_mascota_to_dietas_table.php
│   │   ├── 2025_05_09_193445_add_activo_to_planes_table.php
│   │   ├── 2025_05_10_144509_add_columns_to_planes_table.php
│   │   └── 2025_05_11_091128_update_mascotas_table_remove_raza_add_conditions.php
│   ├── seeders
│   │   ├── ArticuloSeeder.php
│   │   └── DatabaseSeeder.php
│   ├── .gitignore
│   └── database.sqlite
├── public
│   ├── images
│   │   ├── dieta-placeholder.png
│   │   └── Placeholder.jpg
│   ├── .htaccess
│   ├── favicon.ico
│   ├── hot
│   ├── index.php
│   ├── robots.txt
│   └── storage
├── resources
│   ├── css
│   │   ├── admin.css
│   │   └── app.css
│   ├── js
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   ├── calculadora.js
│   │   └── info-gallery.js
│   ├── sass
│   │   ├── _variables.scss
│   │   └── app.scss
│   └── views
│       ├── admin
│       │   └── login.blade.php
│       ├── articulos
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   ├── index.blade.php
│       │   ├── public_index.blade.php
│       │   └── show.blade.php
│       ├── auth
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── calculadora
│       │   ├── create.blade.php
│       │   ├── index.blade.php
│       │   └── pdf.blade.php
│       ├── layouts
│       │   └── app.blade.php
│       ├── mascotas
│       │   ├── create.blade.php
│       │   └── edit.blade.php
│       ├── planes
│       │   ├── index.blade.php
│       │   └── select.blade.php
│       ├── vendor
│       │   └── pagination
│       │       └── custom.blade.php
│       ├── calculadora.blade.php
│       ├── home.blade.php
│       ├── planes.blade.php
│       ├── profile.blade.php
│       └── welcome.blade.php
├── routes
│   ├── console.php
│   └── web.php
├── storage
│   ├── app
│   │   ├── private
│   │   │   ├── public
│   │   │   │   └── articulos
│   │   │   │       ├── 6XQ8ZBO823mhBXY1wlY5wsjPGpnfej7TFY3xNqrz.png
│   │   │   │       ├── 7rUGjTMHUpJp0JEeoG0BzJBX4HfHHvnOEhjmHQFM.png
│   │   │   │       ├── AbKnajrEqemm95BsnT2X4zVWtkJj6g623OP8KuRO.jpg
│   │   │   │       ├── cLbr7UtWvXPbo6AaUPloQjIDYDf7DO2Ylt9VMgyE.jpg
│   │   │   │       ├── e3NLTX6gNkwaqcXkczm4dF7Jkv17YqIy795IJxZa.png
│   │   │   │       ├── FcuQMeMEZa5uaEq4KzXYGXMYNqPsmiN47srm38DD.png
│   │   │   │       ├── gZeyWHTEohTLLeRFf7sWrywOiXs4PXersrCItnTL.jpg
│   │   │   │       ├── j9dJhQzU5JHXRMLDDrUoOkI8jCKWDnxuFbFhP2pT.png
│   │   │   │       ├── kakuCkXdrMwoVhw0GV7jGMTFLUVGX4xdIXXclqe7.png
│   │   │   │       ├── ncbujoxnkQwj5OEsgTExyeknqvt2IilSpGXaUPaG.jpg
│   │   │   │       ├── sOQVxO0VHz7s0ftHiz3NxBYmoLAHpLiFMtJ4BipJ.png
│   │   │   │       ├── TohdneOs4wle0q2TSDmotdwppe5KN4wanMR8qSY2.png
│   │   │   │       ├── WM4je4CiaZHjmQxrm2JgViW33K8gdlD8rMz6yEnT.png
│   │   │   │       ├── X6pq1s4JngntbcZoEwiV94nSWivGoQfhIgObc5k0.jpg
│   │   │   │       └── YgpgfAm6dpXtl5IR6cmw83rgtUzXtE1ZOzDNBWKB.png
│   │   │   └── .gitignore
│   │   ├── public
│   │   │   ├── articulos
│   │   │   │   ├── 5z1qzo5CtIxIZ3tJ82L7IW2GZtetesKFuuwMEz6I.png
│   │   │   │   ├── aTPLIZvwP9FeBSEAOxCjg5v8JTcoxvlxruAOmPuK.png
│   │   │   │   ├── BbwyK5MTUKMlEP4m2r8WuN9dqhBUDNwLzNKOdJTE.jpg
│   │   │   │   ├── G0i9ip1Jw3YM6eOqc2AfoDSVF6rq0a5qM4GbuKio.jpg
│   │   │   │   ├── IY0a4xKV1oqlRHYxKF3xaaPq8MWTvNuFp939J8yY.jpg
│   │   │   │   ├── kyZP3O0GBM4duM7AtjdP5VtIfchXB2IAP6TMG5qv.jpg
│   │   │   │   ├── NtRKGfDiAkaFY3CURItm2xOp8gDOBbIbQW2Oau2m.png
│   │   │   │   ├── rFFaIsDy8JnwyfT09Ltd4B8RkHFU7LYJcg1CHPPI.jpg
│   │   │   │   ├── sIf9k5LCIarSmLGlXH61dajkrpJLhAjcM3mY5e04.jpg
│   │   │   │   ├── tVbVEE6Pp62L6SVC6GJvodBcX5WKhFK3ukyNu3xs.jpg
│   │   │   │   ├── wOvqv9kyiHJ9lWYlw6sc2fI7AqGjIP7nXkrX2d5N.jpg
│   │   │   │   ├── X2tGfdAreqFTMFrlBDTbtzPfKIVUuyJEY7e2VHpK.jpg
│   │   │   │   └── Yww8BUbnI8p43pNTzkUqhZ8JV866StrKTEp0pOy3.png
│   │   │   └── .gitignore
│   │   └── .gitignore
│   ├── framework
│   │   ├── cache
│   │   │   ├── data
│   │   │   │   └── .gitignore
│   │   │   └── .gitignore
│   │   ├── sessions
│   │   │   ├── .gitignore
│   │   │   ├── l2YgRUd1WeFAe7m09Jt8pxwwhpKDSDXb9jJJpOqS
│   │   │   └── snC9DM336SxNZKUQ9AraX7Fff1TopZmygDfpxwVD
│   │   ├── testing
│   │   │   └── .gitignore
│   │   ├── views
│   │   │   ├── .gitignore
│   │   │   ├── 0621604fc20a7ce204342c18c2b3f56f.php
│   │   │   ├── 06c57a2cfba584a36152f0ae1c4d5dbe.php
│   │   │   ├── 111cbe22a3b71f0b2bb0908902bf2e6b.php
│   │   │   ├── 1381cda0527f2da4b0281fba38822588.php
│   │   │   ├── 183c3f0a9f2deee37918e16aa448fb26.php
│   │   │   ├── 2f861f334715a6f22c1f69d3b29c435e.php
│   │   │   ├── 3b2ec00f56eeff03e95b53cd14dd41e9.php
│   │   │   ├── 46684a8bacd22c8cdd7ff984dda2391c.php
│   │   │   ├── 4dc7962803f70b031a541df2bb2afdbe.php
│   │   │   ├── 57bfc293f94325d84223ac4f9ae90cd9.php
│   │   │   ├── 587bdcb65a667d4b2cd79ddd04d04a1f.php
│   │   │   ├── 5bbc43331f540a1cbe1d33772e71687a.php
│   │   │   ├── 71e9ad8206853f827769458fabd7a745.php
│   │   │   ├── 74a82a23e80f61a60f23731b84d9f275.php
│   │   │   ├── 867957ff5a14758be52fb7335488a930.php
│   │   │   ├── 948f3c96336cc03a7da530c9363aa908.php
│   │   │   ├── a9379a6e9dbca2d21d68432f525810f3.php
│   │   │   ├── aa1ae8b056b6006d04bc9e380778e4ca.php
│   │   │   ├── b59c1a248fb389b727f91219595aa45d.php
│   │   │   ├── bb746713407535975805c98b5ba7ba97.php
│   │   │   ├── bf7f71a4644d507a220d35c8592ca533.php
│   │   │   ├── e95e4d46dc709b2648437bc55c13d759.php
│   │   │   ├── ecdd0a9d8b677c2c46f6814ff0688e2a.php
│   │   │   ├── ee2c145e27871c36f708070f09c8fa83.php
│   │   │   └── ff4fd108cf13dcdf2bf4b75f0c00c08e.php
│   │   └── .gitignore
│   └── logs
│       ├── .gitignore
│       └── laravel.log
├── tests
│   ├── Feature
│   │   └── ExampleTest.php
│   ├── Unit
│   │   └── ExampleTest.php
│   └── TestCase.php
├── vendor
│   ├── bin
│   │   ├── carbon
│   │   ├── carbon.bat
│   │   ├── patch-type-declarations
│   │   ├── patch-type-declarations.bat
│   │   ├── php-parse
│   │   ├── php-parse.bat
│   │   ├── phpunit
│   │   ├── phpunit.bat
│   │   ├── pint
│   │   ├── pint.bat
│   │   ├── psysh
│   │   ├── psysh.bat
│   │   ├── sail
│   │   ├── sail.bat
│   │   ├── var-dump-server
│   │   ├── var-dump-server.bat
│   │   ├── yaml-lint
│   │   └── yaml-lint.bat
│   ├── brick
│   │   └── math
│   │       ├── src
│   │       │   ├── Exception
│   │       │   │   ├── DivisionByZeroException.php
│   │       │   │   ├── IntegerOverflowException.php
│   │       │   │   ├── MathException.php
│   │       │   │   ├── NegativeNumberException.php
│   │       │   │   ├── NumberFormatException.php
│   │       │   │   └── RoundingNecessaryException.php
│   │       │   ├── Internal
│   │       │   │   ├── Calculator
│   │       │   │   │   ├── BcMathCalculator.php
│   │       │   │   │   ├── GmpCalculator.php
│   │       │   │   │   └── NativeCalculator.php
│   │       │   │   └── Calculator.php
│   │       │   ├── BigDecimal.php
│   │       │   ├── BigInteger.php
│   │       │   ├── BigNumber.php
│   │       │   ├── BigRational.php
│   │       │   └── RoundingMode.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── psalm-baseline.xml
│   ├── carbonphp
│   │   └── carbon-doctrine-types
│   │       ├── src
│   │       │   └── Carbon
│   │       │       └── Doctrine
│   │       │           ├── CarbonDoctrineType.php
│   │       │           ├── CarbonImmutableType.php
│   │       │           ├── CarbonType.php
│   │       │           ├── CarbonTypeConverter.php
│   │       │           ├── DateTimeDefaultPrecision.php
│   │       │           ├── DateTimeImmutableType.php
│   │       │           └── DateTimeType.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── composer
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── ClassLoader.php
│   │   ├── installed.json
│   │   ├── installed.php
│   │   ├── InstalledVersions.php
│   │   ├── LICENSE
│   │   └── platform_check.php
│   ├── dflydev
│   │   └── dot-access-data
│   │       ├── src
│   │       │   ├── Exception
│   │       │   │   ├── DataException.php
│   │       │   │   ├── InvalidPathException.php
│   │       │   │   └── MissingPathException.php
│   │       │   ├── Data.php
│   │       │   ├── DataInterface.php
│   │       │   └── Util.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── doctrine
│   │   ├── inflector
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       └── index.rst
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Inflector
│   │   │   │           ├── Rules
│   │   │   │           │   ├── English
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── French
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── NorwegianBokmal
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Portuguese
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Spanish
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Turkish
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Pattern.php
│   │   │   │           │   ├── Patterns.php
│   │   │   │           │   ├── Ruleset.php
│   │   │   │           │   ├── Substitution.php
│   │   │   │           │   ├── Substitutions.php
│   │   │   │           │   ├── Transformation.php
│   │   │   │           │   ├── Transformations.php
│   │   │   │           │   └── Word.php
│   │   │   │           ├── CachedWordInflector.php
│   │   │   │           ├── GenericLanguageInflectorFactory.php
│   │   │   │           ├── Inflector.php
│   │   │   │           ├── InflectorFactory.php
│   │   │   │           ├── Language.php
│   │   │   │           ├── LanguageInflectorFactory.php
│   │   │   │           ├── NoopWordInflector.php
│   │   │   │           ├── RulesetInflector.php
│   │   │   │           └── WordInflector.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   └── lexer
│   │       ├── src
│   │       │   ├── AbstractLexer.php
│   │       │   └── Token.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── UPGRADE.md
│   ├── dragonmantank
│   │   └── cron-expression
│   │       ├── src
│   │       │   └── Cron
│   │       │       ├── AbstractField.php
│   │       │       ├── CronExpression.php
│   │       │       ├── DayOfMonthField.php
│   │       │       ├── DayOfWeekField.php
│   │       │       ├── FieldFactory.php
│   │       │       ├── FieldFactoryInterface.php
│   │       │       ├── FieldInterface.php
│   │       │       ├── HoursField.php
│   │       │       ├── MinutesField.php
│   │       │       └── MonthField.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── egulias
│   │   └── email-validator
│   │       ├── src
│   │       │   ├── Parser
│   │       │   │   ├── CommentStrategy
│   │       │   │   │   ├── CommentStrategy.php
│   │       │   │   │   ├── DomainComment.php
│   │       │   │   │   └── LocalComment.php
│   │       │   │   ├── Comment.php
│   │       │   │   ├── DomainLiteral.php
│   │       │   │   ├── DomainPart.php
│   │       │   │   ├── DoubleQuote.php
│   │       │   │   ├── FoldingWhiteSpace.php
│   │       │   │   ├── IDLeftPart.php
│   │       │   │   ├── IDRightPart.php
│   │       │   │   ├── LocalPart.php
│   │       │   │   └── PartParser.php
│   │       │   ├── Result
│   │       │   │   ├── Reason
│   │       │   │   │   ├── AtextAfterCFWS.php
│   │       │   │   │   ├── CharNotAllowed.php
│   │       │   │   │   ├── CommaInDomain.php
│   │       │   │   │   ├── CommentsInIDRight.php
│   │       │   │   │   ├── ConsecutiveAt.php
│   │       │   │   │   ├── ConsecutiveDot.php
│   │       │   │   │   ├── CRLFAtTheEnd.php
│   │       │   │   │   ├── CRLFX2.php
│   │       │   │   │   ├── CRNoLF.php
│   │       │   │   │   ├── DetailedReason.php
│   │       │   │   │   ├── DomainAcceptsNoMail.php
│   │       │   │   │   ├── DomainHyphened.php
│   │       │   │   │   ├── DomainTooLong.php
│   │       │   │   │   ├── DotAtEnd.php
│   │       │   │   │   ├── DotAtStart.php
│   │       │   │   │   ├── EmptyReason.php
│   │       │   │   │   ├── ExceptionFound.php
│   │       │   │   │   ├── ExpectingATEXT.php
│   │       │   │   │   ├── ExpectingCTEXT.php
│   │       │   │   │   ├── ExpectingDomainLiteralClose.php
│   │       │   │   │   ├── ExpectingDTEXT.php
│   │       │   │   │   ├── LabelTooLong.php
│   │       │   │   │   ├── LocalOrReservedDomain.php
│   │       │   │   │   ├── NoDNSRecord.php
│   │       │   │   │   ├── NoDomainPart.php
│   │       │   │   │   ├── NoLocalPart.php
│   │       │   │   │   ├── Reason.php
│   │       │   │   │   ├── RFCWarnings.php
│   │       │   │   │   ├── SpoofEmail.php
│   │       │   │   │   ├── UnableToGetDNSRecord.php
│   │       │   │   │   ├── UnclosedComment.php
│   │       │   │   │   ├── UnclosedQuotedString.php
│   │       │   │   │   ├── UnOpenedComment.php
│   │       │   │   │   └── UnusualElements.php
│   │       │   │   ├── InvalidEmail.php
│   │       │   │   ├── MultipleErrors.php
│   │       │   │   ├── Result.php
│   │       │   │   ├── SpoofEmail.php
│   │       │   │   └── ValidEmail.php
│   │       │   ├── Validation
│   │       │   │   ├── Exception
│   │       │   │   │   └── EmptyValidationList.php
│   │       │   │   ├── Extra
│   │       │   │   │   └── SpoofCheckValidation.php
│   │       │   │   ├── DNSCheckValidation.php
│   │       │   │   ├── DNSGetRecordWrapper.php
│   │       │   │   ├── DNSRecords.php
│   │       │   │   ├── EmailValidation.php
│   │       │   │   ├── MessageIDValidation.php
│   │       │   │   ├── MultipleValidationWithAnd.php
│   │       │   │   ├── NoRFCWarningsValidation.php
│   │       │   │   └── RFCValidation.php
│   │       │   ├── Warning
│   │       │   │   ├── AddressLiteral.php
│   │       │   │   ├── CFWSNearAt.php
│   │       │   │   ├── CFWSWithFWS.php
│   │       │   │   ├── Comment.php
│   │       │   │   ├── DeprecatedComment.php
│   │       │   │   ├── DomainLiteral.php
│   │       │   │   ├── EmailTooLong.php
│   │       │   │   ├── IPV6BadChar.php
│   │       │   │   ├── IPV6ColonEnd.php
│   │       │   │   ├── IPV6ColonStart.php
│   │       │   │   ├── IPV6Deprecated.php
│   │       │   │   ├── IPV6DoubleColon.php
│   │       │   │   ├── IPV6GroupCount.php
│   │       │   │   ├── IPV6MaxGroups.php
│   │       │   │   ├── LocalTooLong.php
│   │       │   │   ├── NoDNSMXRecord.php
│   │       │   │   ├── ObsoleteDTEXT.php
│   │       │   │   ├── QuotedPart.php
│   │       │   │   ├── QuotedString.php
│   │       │   │   ├── TLD.php
│   │       │   │   └── Warning.php
│   │       │   ├── EmailLexer.php
│   │       │   ├── EmailParser.php
│   │       │   ├── EmailValidator.php
│   │       │   ├── MessageIDParser.php
│   │       │   └── Parser.php
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       └── LICENSE
│   ├── fakerphp
│   │   └── faker
│   │       ├── src
│   │       │   ├── Faker
│   │       │   │   ├── Calculator
│   │       │   │   │   ├── Ean.php
│   │       │   │   │   ├── Iban.php
│   │       │   │   │   ├── Inn.php
│   │       │   │   │   ├── Isbn.php
│   │       │   │   │   ├── Luhn.php
│   │       │   │   │   └── TCNo.php
│   │       │   │   ├── Container
│   │       │   │   │   ├── Container.php
│   │       │   │   │   ├── ContainerBuilder.php
│   │       │   │   │   ├── ContainerException.php
│   │       │   │   │   ├── ContainerInterface.php
│   │       │   │   │   └── NotInContainerException.php
│   │       │   │   ├── Core
│   │       │   │   │   ├── Barcode.php
│   │       │   │   │   ├── Blood.php
│   │       │   │   │   ├── Color.php
│   │       │   │   │   ├── Coordinates.php
│   │       │   │   │   ├── DateTime.php
│   │       │   │   │   ├── File.php
│   │       │   │   │   ├── Number.php
│   │       │   │   │   ├── Uuid.php
│   │       │   │   │   └── Version.php
│   │       │   │   ├── Extension
│   │       │   │   │   ├── AddressExtension.php
│   │       │   │   │   ├── BarcodeExtension.php
│   │       │   │   │   ├── BloodExtension.php
│   │       │   │   │   ├── ColorExtension.php
│   │       │   │   │   ├── CompanyExtension.php
│   │       │   │   │   ├── CountryExtension.php
│   │       │   │   │   ├── DateTimeExtension.php
│   │       │   │   │   ├── Extension.php
│   │       │   │   │   ├── ExtensionNotFound.php
│   │       │   │   │   ├── FileExtension.php
│   │       │   │   │   ├── GeneratorAwareExtension.php
│   │       │   │   │   ├── GeneratorAwareExtensionTrait.php
│   │       │   │   │   ├── Helper.php
│   │       │   │   │   ├── NumberExtension.php
│   │       │   │   │   ├── PersonExtension.php
│   │       │   │   │   ├── PhoneNumberExtension.php
│   │       │   │   │   ├── UuidExtension.php
│   │       │   │   │   └── VersionExtension.php
│   │       │   │   ├── Guesser
│   │       │   │   │   └── Name.php
│   │       │   │   ├── ORM
│   │       │   │   │   ├── CakePHP
│   │       │   │   │   │   ├── ColumnTypeGuesser.php
│   │       │   │   │   │   ├── EntityPopulator.php
│   │       │   │   │   │   └── Populator.php
│   │       │   │   │   ├── Doctrine
│   │       │   │   │   │   ├── backward-compatibility.php
│   │       │   │   │   │   ├── ColumnTypeGuesser.php
│   │       │   │   │   │   ├── EntityPopulator.php
│   │       │   │   │   │   └── Populator.php
│   │       │   │   │   ├── Mandango
│   │       │   │   │   │   ├── ColumnTypeGuesser.php
│   │       │   │   │   │   ├── EntityPopulator.php
│   │       │   │   │   │   └── Populator.php
│   │       │   │   │   ├── Propel
│   │       │   │   │   │   ├── ColumnTypeGuesser.php
│   │       │   │   │   │   ├── EntityPopulator.php
│   │       │   │   │   │   └── Populator.php
│   │       │   │   │   ├── Propel2
│   │       │   │   │   │   ├── ColumnTypeGuesser.php
│   │       │   │   │   │   ├── EntityPopulator.php
│   │       │   │   │   │   └── Populator.php
│   │       │   │   │   └── Spot
│   │       │   │   │       ├── ColumnTypeGuesser.php
│   │       │   │   │       ├── EntityPopulator.php
│   │       │   │   │       └── Populator.php
│   │       │   │   ├── Provider
│   │       │   │   │   ├── ar_EG
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ar_JO
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ar_SA
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── at_AT
│   │       │   │   │   │   └── Payment.php
│   │       │   │   │   ├── bg_BG
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── bn_BD
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Utils.php
│   │       │   │   │   ├── cs_CZ
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── DateTime.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── da_DK
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── de_AT
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── de_CH
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── de_DE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── el_CY
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── el_GR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── en_AU
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_CA
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_GB
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_HK
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_IN
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_NG
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_NZ
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_PH
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_SG
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_UG
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── en_US
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── en_ZA
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── es_AR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── es_ES
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── es_PE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── es_VE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── et_EE
│   │       │   │   │   │   └── Person.php
│   │       │   │   │   ├── fa_IR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── fi_FI
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── fr_BE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── fr_CA
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── fr_CH
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── fr_FR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── he_IL
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── hr_HR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── hu_HU
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── hy_AM
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── id_ID
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── is_IS
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── it_CH
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── it_IT
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ja_JP
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ka_GE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── DateTime.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── kk_KZ
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ko_KR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── lt_LT
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── lv_LV
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── me_ME
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── mn_MN
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── ms_MY
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Miscellaneous.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── nb_NO
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── ne_NP
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── nl_BE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── nl_NL
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── pl_PL
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── LicensePlate.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── pt_BR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── check_digit.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── pt_PT
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── ro_MD
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ro_RO
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── ru_RU
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── sk_SK
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── sl_SI
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── sr_Cyrl_RS
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   └── Person.php
│   │       │   │   │   ├── sr_Latn_RS
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   └── Person.php
│   │       │   │   │   ├── sr_RS
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   └── Person.php
│   │       │   │   │   ├── sv_SE
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Municipality.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── th_TH
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── tr_TR
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── DateTime.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── uk_UA
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── vi_VN
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── zh_CN
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── DateTime.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   └── PhoneNumber.php
│   │       │   │   │   ├── zh_TW
│   │       │   │   │   │   ├── Address.php
│   │       │   │   │   │   ├── Color.php
│   │       │   │   │   │   ├── Company.php
│   │       │   │   │   │   ├── DateTime.php
│   │       │   │   │   │   ├── Internet.php
│   │       │   │   │   │   ├── Payment.php
│   │       │   │   │   │   ├── Person.php
│   │       │   │   │   │   ├── PhoneNumber.php
│   │       │   │   │   │   └── Text.php
│   │       │   │   │   ├── Address.php
│   │       │   │   │   ├── Barcode.php
│   │       │   │   │   ├── Base.php
│   │       │   │   │   ├── Biased.php
│   │       │   │   │   ├── Color.php
│   │       │   │   │   ├── Company.php
│   │       │   │   │   ├── DateTime.php
│   │       │   │   │   ├── File.php
│   │       │   │   │   ├── HtmlLorem.php
│   │       │   │   │   ├── Image.php
│   │       │   │   │   ├── Internet.php
│   │       │   │   │   ├── Lorem.php
│   │       │   │   │   ├── Medical.php
│   │       │   │   │   ├── Miscellaneous.php
│   │       │   │   │   ├── Payment.php
│   │       │   │   │   ├── Person.php
│   │       │   │   │   ├── PhoneNumber.php
│   │       │   │   │   ├── Text.php
│   │       │   │   │   ├── UserAgent.php
│   │       │   │   │   └── Uuid.php
│   │       │   │   ├── ChanceGenerator.php
│   │       │   │   ├── DefaultGenerator.php
│   │       │   │   ├── Documentor.php
│   │       │   │   ├── Factory.php
│   │       │   │   ├── Generator.php
│   │       │   │   ├── UniqueGenerator.php
│   │       │   │   └── ValidGenerator.php
│   │       │   └── autoload.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── rector-migrate.php
│   ├── filp
│   │   └── whoops
│   │       ├── src
│   │       │   └── Whoops
│   │       │       ├── Exception
│   │       │       │   ├── ErrorException.php
│   │       │       │   ├── Formatter.php
│   │       │       │   ├── Frame.php
│   │       │       │   ├── FrameCollection.php
│   │       │       │   └── Inspector.php
│   │       │       ├── Handler
│   │       │       │   ├── CallbackHandler.php
│   │       │       │   ├── Handler.php
│   │       │       │   ├── HandlerInterface.php
│   │       │       │   ├── JsonResponseHandler.php
│   │       │       │   ├── PlainTextHandler.php
│   │       │       │   ├── PrettyPageHandler.php
│   │       │       │   └── XmlResponseHandler.php
│   │       │       ├── Inspector
│   │       │       │   ├── InspectorFactory.php
│   │       │       │   ├── InspectorFactoryInterface.php
│   │       │       │   └── InspectorInterface.php
│   │       │       ├── Resources
│   │       │       │   ├── css
│   │       │       │   │   ├── prism.css
│   │       │       │   │   └── whoops.base.css
│   │       │       │   ├── js
│   │       │       │   │   ├── clipboard.min.js
│   │       │       │   │   ├── prism.js
│   │       │       │   │   ├── whoops.base.js
│   │       │       │   │   └── zepto.min.js
│   │       │       │   └── views
│   │       │       │       ├── env_details.html.php
│   │       │       │       ├── frame_code.html.php
│   │       │       │       ├── frame_list.html.php
│   │       │       │       ├── frames_container.html.php
│   │       │       │       ├── frames_description.html.php
│   │       │       │       ├── header_outer.html.php
│   │       │       │       ├── header.html.php
│   │       │       │       ├── layout.html.php
│   │       │       │       ├── panel_details_outer.html.php
│   │       │       │       ├── panel_details.html.php
│   │       │       │       ├── panel_left_outer.html.php
│   │       │       │       └── panel_left.html.php
│   │       │       ├── Util
│   │       │       │   ├── HtmlDumperOutput.php
│   │       │       │   ├── Misc.php
│   │       │       │   ├── SystemFacade.php
│   │       │       │   └── TemplateHelper.php
│   │       │       ├── Run.php
│   │       │       └── RunInterface.php
│   │       ├── .mailmap
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       └── SECURITY.md
│   ├── fruitcake
│   │   └── php-cors
│   │       ├── src
│   │       │   ├── Exceptions
│   │       │   │   └── InvalidOptionException.php
│   │       │   └── CorsService.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── graham-campbell
│   │   └── result-type
│   │       ├── src
│   │       │   ├── Error.php
│   │       │   ├── Result.php
│   │       │   └── Success.php
│   │       ├── composer.json
│   │       └── LICENSE
│   ├── guzzlehttp
│   │   ├── guzzle
│   │   │   ├── src
│   │   │   │   ├── Cookie
│   │   │   │   │   ├── CookieJar.php
│   │   │   │   │   ├── CookieJarInterface.php
│   │   │   │   │   ├── FileCookieJar.php
│   │   │   │   │   ├── SessionCookieJar.php
│   │   │   │   │   └── SetCookie.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── BadResponseException.php
│   │   │   │   │   ├── ClientException.php
│   │   │   │   │   ├── ConnectException.php
│   │   │   │   │   ├── GuzzleException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── RequestException.php
│   │   │   │   │   ├── ServerException.php
│   │   │   │   │   ├── TooManyRedirectsException.php
│   │   │   │   │   └── TransferException.php
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CurlFactory.php
│   │   │   │   │   ├── CurlFactoryInterface.php
│   │   │   │   │   ├── CurlHandler.php
│   │   │   │   │   ├── CurlMultiHandler.php
│   │   │   │   │   ├── EasyHandle.php
│   │   │   │   │   ├── HeaderProcessor.php
│   │   │   │   │   ├── MockHandler.php
│   │   │   │   │   ├── Proxy.php
│   │   │   │   │   └── StreamHandler.php
│   │   │   │   ├── BodySummarizer.php
│   │   │   │   ├── BodySummarizerInterface.php
│   │   │   │   ├── Client.php
│   │   │   │   ├── ClientInterface.php
│   │   │   │   ├── ClientTrait.php
│   │   │   │   ├── functions_include.php
│   │   │   │   ├── functions.php
│   │   │   │   ├── HandlerStack.php
│   │   │   │   ├── MessageFormatter.php
│   │   │   │   ├── MessageFormatterInterface.php
│   │   │   │   ├── Middleware.php
│   │   │   │   ├── Pool.php
│   │   │   │   ├── PrepareBodyMiddleware.php
│   │   │   │   ├── RedirectMiddleware.php
│   │   │   │   ├── RequestOptions.php
│   │   │   │   ├── RetryMiddleware.php
│   │   │   │   ├── TransferStats.php
│   │   │   │   └── Utils.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── UPGRADING.md
│   │   ├── promises
│   │   │   ├── src
│   │   │   │   ├── AggregateException.php
│   │   │   │   ├── CancellationException.php
│   │   │   │   ├── Coroutine.php
│   │   │   │   ├── Create.php
│   │   │   │   ├── Each.php
│   │   │   │   ├── EachPromise.php
│   │   │   │   ├── FulfilledPromise.php
│   │   │   │   ├── Is.php
│   │   │   │   ├── Promise.php
│   │   │   │   ├── PromiseInterface.php
│   │   │   │   ├── PromisorInterface.php
│   │   │   │   ├── RejectedPromise.php
│   │   │   │   ├── RejectionException.php
│   │   │   │   ├── TaskQueue.php
│   │   │   │   ├── TaskQueueInterface.php
│   │   │   │   └── Utils.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── psr7
│   │   │   ├── src
│   │   │   │   ├── Exception
│   │   │   │   │   └── MalformedUriException.php
│   │   │   │   ├── AppendStream.php
│   │   │   │   ├── BufferStream.php
│   │   │   │   ├── CachingStream.php
│   │   │   │   ├── DroppingStream.php
│   │   │   │   ├── FnStream.php
│   │   │   │   ├── Header.php
│   │   │   │   ├── HttpFactory.php
│   │   │   │   ├── InflateStream.php
│   │   │   │   ├── LazyOpenStream.php
│   │   │   │   ├── LimitStream.php
│   │   │   │   ├── Message.php
│   │   │   │   ├── MessageTrait.php
│   │   │   │   ├── MimeType.php
│   │   │   │   ├── MultipartStream.php
│   │   │   │   ├── NoSeekStream.php
│   │   │   │   ├── PumpStream.php
│   │   │   │   ├── Query.php
│   │   │   │   ├── Request.php
│   │   │   │   ├── Response.php
│   │   │   │   ├── Rfc7230.php
│   │   │   │   ├── ServerRequest.php
│   │   │   │   ├── Stream.php
│   │   │   │   ├── StreamDecoratorTrait.php
│   │   │   │   ├── StreamWrapper.php
│   │   │   │   ├── UploadedFile.php
│   │   │   │   ├── Uri.php
│   │   │   │   ├── UriComparator.php
│   │   │   │   ├── UriNormalizer.php
│   │   │   │   ├── UriResolver.php
│   │   │   │   └── Utils.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   └── uri-template
│   │       ├── src
│   │       │   └── UriTemplate.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── hamcrest
│   │   └── hamcrest-php
│   │       ├── .github
│   │       │   └── workflows
│   │       │       └── tests.yml
│   │       ├── generator
│   │       │   ├── parts
│   │       │   │   ├── file_header.txt
│   │       │   │   ├── functions_footer.txt
│   │       │   │   ├── functions_header.txt
│   │       │   │   ├── functions_imports.txt
│   │       │   │   ├── matchers_footer.txt
│   │       │   │   ├── matchers_header.txt
│   │       │   │   └── matchers_imports.txt
│   │       │   ├── FactoryCall.php
│   │       │   ├── FactoryClass.php
│   │       │   ├── FactoryFile.php
│   │       │   ├── FactoryGenerator.php
│   │       │   ├── FactoryMethod.php
│   │       │   ├── FactoryParameter.php
│   │       │   ├── GlobalFunctionFile.php
│   │       │   ├── run.php
│   │       │   └── StaticMethodFile.php
│   │       ├── hamcrest
│   │       │   ├── Hamcrest
│   │       │   │   ├── Arrays
│   │       │   │   │   ├── IsArray.php
│   │       │   │   │   ├── IsArrayContaining.php
│   │       │   │   │   ├── IsArrayContainingInAnyOrder.php
│   │       │   │   │   ├── IsArrayContainingInOrder.php
│   │       │   │   │   ├── IsArrayContainingKey.php
│   │       │   │   │   ├── IsArrayContainingKeyValuePair.php
│   │       │   │   │   ├── IsArrayWithSize.php
│   │       │   │   │   ├── MatchingOnce.php
│   │       │   │   │   └── SeriesMatchingOnce.php
│   │       │   │   ├── Collection
│   │       │   │   │   ├── IsEmptyTraversable.php
│   │       │   │   │   └── IsTraversableWithSize.php
│   │       │   │   ├── Core
│   │       │   │   │   ├── AllOf.php
│   │       │   │   │   ├── AnyOf.php
│   │       │   │   │   ├── CombinableMatcher.php
│   │       │   │   │   ├── DescribedAs.php
│   │       │   │   │   ├── Every.php
│   │       │   │   │   ├── HasToString.php
│   │       │   │   │   ├── Is.php
│   │       │   │   │   ├── IsAnything.php
│   │       │   │   │   ├── IsCollectionContaining.php
│   │       │   │   │   ├── IsEqual.php
│   │       │   │   │   ├── IsIdentical.php
│   │       │   │   │   ├── IsInstanceOf.php
│   │       │   │   │   ├── IsNot.php
│   │       │   │   │   ├── IsNull.php
│   │       │   │   │   ├── IsSame.php
│   │       │   │   │   ├── IsTypeOf.php
│   │       │   │   │   ├── Set.php
│   │       │   │   │   └── ShortcutCombination.php
│   │       │   │   ├── Internal
│   │       │   │   │   └── SelfDescribingValue.php
│   │       │   │   ├── Number
│   │       │   │   │   ├── IsCloseTo.php
│   │       │   │   │   └── OrderingComparison.php
│   │       │   │   ├── Text
│   │       │   │   │   ├── IsEmptyString.php
│   │       │   │   │   ├── IsEqualIgnoringCase.php
│   │       │   │   │   ├── IsEqualIgnoringWhiteSpace.php
│   │       │   │   │   ├── MatchesPattern.php
│   │       │   │   │   ├── StringContains.php
│   │       │   │   │   ├── StringContainsIgnoringCase.php
│   │       │   │   │   ├── StringContainsInOrder.php
│   │       │   │   │   ├── StringEndsWith.php
│   │       │   │   │   ├── StringStartsWith.php
│   │       │   │   │   └── SubstringMatcher.php
│   │       │   │   ├── Type
│   │       │   │   │   ├── IsArray.php
│   │       │   │   │   ├── IsBoolean.php
│   │       │   │   │   ├── IsCallable.php
│   │       │   │   │   ├── IsDouble.php
│   │       │   │   │   ├── IsInteger.php
│   │       │   │   │   ├── IsNumeric.php
│   │       │   │   │   ├── IsObject.php
│   │       │   │   │   ├── IsResource.php
│   │       │   │   │   ├── IsScalar.php
│   │       │   │   │   └── IsString.php
│   │       │   │   ├── Xml
│   │       │   │   │   └── HasXPath.php
│   │       │   │   ├── AssertionError.php
│   │       │   │   ├── BaseDescription.php
│   │       │   │   ├── BaseMatcher.php
│   │       │   │   ├── Description.php
│   │       │   │   ├── DiagnosingMatcher.php
│   │       │   │   ├── FeatureMatcher.php
│   │       │   │   ├── Matcher.php
│   │       │   │   ├── MatcherAssert.php
│   │       │   │   ├── Matchers.php
│   │       │   │   ├── NullDescription.php
│   │       │   │   ├── SelfDescribing.php
│   │       │   │   ├── StringDescription.php
│   │       │   │   ├── TypeSafeDiagnosingMatcher.php
│   │       │   │   ├── TypeSafeMatcher.php
│   │       │   │   └── Util.php
│   │       │   └── Hamcrest.php
│   │       ├── tests
│   │       │   ├── Hamcrest
│   │       │   │   ├── Array
│   │       │   │   │   ├── IsArrayContainingInAnyOrderTest.php
│   │       │   │   │   ├── IsArrayContainingInOrderTest.php
│   │       │   │   │   ├── IsArrayContainingKeyTest.php
│   │       │   │   │   ├── IsArrayContainingKeyValuePairTest.php
│   │       │   │   │   ├── IsArrayContainingTest.php
│   │       │   │   │   ├── IsArrayTest.php
│   │       │   │   │   └── IsArrayWithSizeTest.php
│   │       │   │   ├── Collection
│   │       │   │   │   ├── IsEmptyTraversableTest.php
│   │       │   │   │   └── IsTraversableWithSizeTest.php
│   │       │   │   ├── Core
│   │       │   │   │   ├── AllOfTest.php
│   │       │   │   │   ├── AnyOfTest.php
│   │       │   │   │   ├── CombinableMatcherTest.php
│   │       │   │   │   ├── DescribedAsTest.php
│   │       │   │   │   ├── EveryTest.php
│   │       │   │   │   ├── HasToStringTest.php
│   │       │   │   │   ├── IsAnythingTest.php
│   │       │   │   │   ├── IsCollectionContainingTest.php
│   │       │   │   │   ├── IsEqualTest.php
│   │       │   │   │   ├── IsIdenticalTest.php
│   │       │   │   │   ├── IsInstanceOfTest.php
│   │       │   │   │   ├── IsNotTest.php
│   │       │   │   │   ├── IsNullTest.php
│   │       │   │   │   ├── IsSameTest.php
│   │       │   │   │   ├── IsTest.php
│   │       │   │   │   ├── IsTypeOfTest.php
│   │       │   │   │   ├── SampleBaseClass.php
│   │       │   │   │   ├── SampleSubClass.php
│   │       │   │   │   └── SetTest.php
│   │       │   │   ├── Number
│   │       │   │   │   ├── IsCloseToTest.php
│   │       │   │   │   └── OrderingComparisonTest.php
│   │       │   │   ├── Text
│   │       │   │   │   ├── IsEmptyStringTest.php
│   │       │   │   │   ├── IsEqualIgnoringCaseTest.php
│   │       │   │   │   ├── IsEqualIgnoringWhiteSpaceTest.php
│   │       │   │   │   ├── MatchesPatternTest.php
│   │       │   │   │   ├── StringContainsIgnoringCaseTest.php
│   │       │   │   │   ├── StringContainsInOrderTest.php
│   │       │   │   │   ├── StringContainsTest.php
│   │       │   │   │   ├── StringEndsWithTest.php
│   │       │   │   │   └── StringStartsWithTest.php
│   │       │   │   ├── Type
│   │       │   │   │   ├── IsArrayTest.php
│   │       │   │   │   ├── IsBooleanTest.php
│   │       │   │   │   ├── IsCallableTest.php
│   │       │   │   │   ├── IsDoubleTest.php
│   │       │   │   │   ├── IsIntegerTest.php
│   │       │   │   │   ├── IsNumericTest.php
│   │       │   │   │   ├── IsObjectTest.php
│   │       │   │   │   ├── IsResourceTest.php
│   │       │   │   │   ├── IsScalarTest.php
│   │       │   │   │   └── IsStringTest.php
│   │       │   │   ├── Xml
│   │       │   │   │   └── HasXPathTest.php
│   │       │   │   ├── AbstractMatcherTest.php
│   │       │   │   ├── BaseMatcherTest.php
│   │       │   │   ├── FeatureMatcherTest.php
│   │       │   │   ├── InvokedMatcherTest.php
│   │       │   │   ├── MatcherAssertTest.php
│   │       │   │   ├── StringDescriptionTest.php
│   │       │   │   └── UtilTest.php
│   │       │   ├── bootstrap.php
│   │       │   └── phpunit.xml.dist
│   │       ├── .coveralls.yml
│   │       ├── .gitignore
│   │       ├── .gush.yml
│   │       ├── .travis.yml
│   │       ├── CHANGES.txt
│   │       ├── composer.json
│   │       ├── LICENSE.txt
│   │       └── README.md
│   ├── laravel
│   │   ├── framework
│   │   │   ├── config
│   │   │   │   ├── app.php
│   │   │   │   ├── auth.php
│   │   │   │   ├── broadcasting.php
│   │   │   │   ├── cache.php
│   │   │   │   ├── concurrency.php
│   │   │   │   ├── cors.php
│   │   │   │   ├── database.php
│   │   │   │   ├── filesystems.php
│   │   │   │   ├── hashing.php
│   │   │   │   ├── logging.php
│   │   │   │   ├── mail.php
│   │   │   │   ├── queue.php
│   │   │   │   ├── services.php
│   │   │   │   ├── session.php
│   │   │   │   └── view.php
│   │   │   ├── config-stubs
│   │   │   │   └── app.php
│   │   │   ├── src
│   │   │   │   └── Illuminate
│   │   │   │       ├── Auth
│   │   │   │       │   ├── Access
│   │   │   │       │   │   ├── Events
│   │   │   │       │   │   │   └── GateEvaluated.php
│   │   │   │       │   │   ├── AuthorizationException.php
│   │   │   │       │   │   ├── Gate.php
│   │   │   │       │   │   ├── HandlesAuthorization.php
│   │   │   │       │   │   └── Response.php
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   └── make
│   │   │   │       │   │   │       └── views
│   │   │   │       │   │   │           └── layouts
│   │   │   │       │   │   │               └── app.stub
│   │   │   │       │   │   └── ClearResetsCommand.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── Attempting.php
│   │   │   │       │   │   ├── Authenticated.php
│   │   │   │       │   │   ├── CurrentDeviceLogout.php
│   │   │   │       │   │   ├── Failed.php
│   │   │   │       │   │   ├── Lockout.php
│   │   │   │       │   │   ├── Login.php
│   │   │   │       │   │   ├── Logout.php
│   │   │   │       │   │   ├── OtherDeviceLogout.php
│   │   │   │       │   │   ├── PasswordReset.php
│   │   │   │       │   │   ├── PasswordResetLinkSent.php
│   │   │   │       │   │   ├── Registered.php
│   │   │   │       │   │   ├── Validated.php
│   │   │   │       │   │   └── Verified.php
│   │   │   │       │   ├── Listeners
│   │   │   │       │   │   └── SendEmailVerificationNotification.php
│   │   │   │       │   ├── Middleware
│   │   │   │       │   │   ├── Authenticate.php
│   │   │   │       │   │   ├── AuthenticateWithBasicAuth.php
│   │   │   │       │   │   ├── Authorize.php
│   │   │   │       │   │   ├── EnsureEmailIsVerified.php
│   │   │   │       │   │   ├── RedirectIfAuthenticated.php
│   │   │   │       │   │   └── RequirePassword.php
│   │   │   │       │   ├── Notifications
│   │   │   │       │   │   ├── ResetPassword.php
│   │   │   │       │   │   └── VerifyEmail.php
│   │   │   │       │   ├── Passwords
│   │   │   │       │   │   ├── CacheTokenRepository.php
│   │   │   │       │   │   ├── CanResetPassword.php
│   │   │   │       │   │   ├── DatabaseTokenRepository.php
│   │   │   │       │   │   ├── PasswordBroker.php
│   │   │   │       │   │   ├── PasswordBrokerManager.php
│   │   │   │       │   │   ├── PasswordResetServiceProvider.php
│   │   │   │       │   │   └── TokenRepositoryInterface.php
│   │   │   │       │   ├── Authenticatable.php
│   │   │   │       │   ├── AuthenticationException.php
│   │   │   │       │   ├── AuthManager.php
│   │   │   │       │   ├── AuthServiceProvider.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── CreatesUserProviders.php
│   │   │   │       │   ├── DatabaseUserProvider.php
│   │   │   │       │   ├── EloquentUserProvider.php
│   │   │   │       │   ├── GenericUser.php
│   │   │   │       │   ├── GuardHelpers.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── MustVerifyEmail.php
│   │   │   │       │   ├── Recaller.php
│   │   │   │       │   ├── RequestGuard.php
│   │   │   │       │   ├── SessionGuard.php
│   │   │   │       │   └── TokenGuard.php
│   │   │   │       ├── Broadcasting
│   │   │   │       │   ├── Broadcasters
│   │   │   │       │   │   ├── AblyBroadcaster.php
│   │   │   │       │   │   ├── Broadcaster.php
│   │   │   │       │   │   ├── LogBroadcaster.php
│   │   │   │       │   │   ├── NullBroadcaster.php
│   │   │   │       │   │   ├── PusherBroadcaster.php
│   │   │   │       │   │   ├── RedisBroadcaster.php
│   │   │   │       │   │   └── UsePusherChannelConventions.php
│   │   │   │       │   ├── AnonymousEvent.php
│   │   │   │       │   ├── BroadcastController.php
│   │   │   │       │   ├── BroadcastEvent.php
│   │   │   │       │   ├── BroadcastException.php
│   │   │   │       │   ├── BroadcastManager.php
│   │   │   │       │   ├── BroadcastServiceProvider.php
│   │   │   │       │   ├── Channel.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── EncryptedPrivateChannel.php
│   │   │   │       │   ├── InteractsWithBroadcasting.php
│   │   │   │       │   ├── InteractsWithSockets.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── PendingBroadcast.php
│   │   │   │       │   ├── PresenceChannel.php
│   │   │   │       │   ├── PrivateChannel.php
│   │   │   │       │   └── UniqueBroadcastEvent.php
│   │   │   │       ├── Bus
│   │   │   │       │   ├── Events
│   │   │   │       │   │   └── BatchDispatched.php
│   │   │   │       │   ├── Batch.php
│   │   │   │       │   ├── Batchable.php
│   │   │   │       │   ├── BatchFactory.php
│   │   │   │       │   ├── BatchRepository.php
│   │   │   │       │   ├── BusServiceProvider.php
│   │   │   │       │   ├── ChainedBatch.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── DatabaseBatchRepository.php
│   │   │   │       │   ├── Dispatcher.php
│   │   │   │       │   ├── DynamoBatchRepository.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── PendingBatch.php
│   │   │   │       │   ├── PrunableBatchRepository.php
│   │   │   │       │   ├── Queueable.php
│   │   │   │       │   ├── UniqueLock.php
│   │   │   │       │   └── UpdatedBatchJobCounts.php
│   │   │   │       ├── Cache
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   └── cache.stub
│   │   │   │       │   │   ├── CacheTableCommand.php
│   │   │   │       │   │   ├── ClearCommand.php
│   │   │   │       │   │   ├── ForgetCommand.php
│   │   │   │       │   │   └── PruneStaleTagsCommand.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── CacheEvent.php
│   │   │   │       │   │   ├── CacheFlushed.php
│   │   │   │       │   │   ├── CacheFlushing.php
│   │   │   │       │   │   ├── CacheHit.php
│   │   │   │       │   │   ├── CacheMissed.php
│   │   │   │       │   │   ├── ForgettingKey.php
│   │   │   │       │   │   ├── KeyForgetFailed.php
│   │   │   │       │   │   ├── KeyForgotten.php
│   │   │   │       │   │   ├── KeyWriteFailed.php
│   │   │   │       │   │   ├── KeyWritten.php
│   │   │   │       │   │   ├── RetrievingKey.php
│   │   │   │       │   │   ├── RetrievingManyKeys.php
│   │   │   │       │   │   ├── WritingKey.php
│   │   │   │       │   │   └── WritingManyKeys.php
│   │   │   │       │   ├── RateLimiting
│   │   │   │       │   │   ├── GlobalLimit.php
│   │   │   │       │   │   ├── Limit.php
│   │   │   │       │   │   └── Unlimited.php
│   │   │   │       │   ├── ApcStore.php
│   │   │   │       │   ├── ApcWrapper.php
│   │   │   │       │   ├── ArrayLock.php
│   │   │   │       │   ├── ArrayStore.php
│   │   │   │       │   ├── CacheLock.php
│   │   │   │       │   ├── CacheManager.php
│   │   │   │       │   ├── CacheServiceProvider.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── DatabaseLock.php
│   │   │   │       │   ├── DatabaseStore.php
│   │   │   │       │   ├── DynamoDbLock.php
│   │   │   │       │   ├── DynamoDbStore.php
│   │   │   │       │   ├── FileLock.php
│   │   │   │       │   ├── FileStore.php
│   │   │   │       │   ├── HasCacheLock.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Lock.php
│   │   │   │       │   ├── LuaScripts.php
│   │   │   │       │   ├── MemcachedConnector.php
│   │   │   │       │   ├── MemcachedLock.php
│   │   │   │       │   ├── MemcachedStore.php
│   │   │   │       │   ├── NoLock.php
│   │   │   │       │   ├── NullStore.php
│   │   │   │       │   ├── PhpRedisLock.php
│   │   │   │       │   ├── RateLimiter.php
│   │   │   │       │   ├── RedisLock.php
│   │   │   │       │   ├── RedisStore.php
│   │   │   │       │   ├── RedisTaggedCache.php
│   │   │   │       │   ├── RedisTagSet.php
│   │   │   │       │   ├── Repository.php
│   │   │   │       │   ├── RetrievesMultipleKeys.php
│   │   │   │       │   ├── TaggableStore.php
│   │   │   │       │   ├── TaggedCache.php
│   │   │   │       │   └── TagSet.php
│   │   │   │       ├── Collections
│   │   │   │       │   ├── Traits
│   │   │   │       │   │   ├── EnumeratesValues.php
│   │   │   │       │   │   └── TransformsToResourceCollection.php
│   │   │   │       │   ├── Arr.php
│   │   │   │       │   ├── Collection.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Enumerable.php
│   │   │   │       │   ├── functions.php
│   │   │   │       │   ├── helpers.php
│   │   │   │       │   ├── HigherOrderCollectionProxy.php
│   │   │   │       │   ├── ItemNotFoundException.php
│   │   │   │       │   ├── LazyCollection.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   └── MultipleItemsFoundException.php
│   │   │   │       ├── Concurrency
│   │   │   │       │   ├── Console
│   │   │   │       │   │   └── InvokeSerializedClosureCommand.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── ConcurrencyManager.php
│   │   │   │       │   ├── ConcurrencyServiceProvider.php
│   │   │   │       │   ├── ForkDriver.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── ProcessDriver.php
│   │   │   │       │   └── SyncDriver.php
│   │   │   │       ├── Conditionable
│   │   │   │       │   ├── Traits
│   │   │   │       │   │   └── Conditionable.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── HigherOrderWhenProxy.php
│   │   │   │       │   └── LICENSE.md
│   │   │   │       ├── Config
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   └── Repository.php
│   │   │   │       ├── Console
│   │   │   │       │   ├── Concerns
│   │   │   │       │   │   ├── CallsCommands.php
│   │   │   │       │   │   ├── ConfiguresPrompts.php
│   │   │   │       │   │   ├── CreatesMatchingTest.php
│   │   │   │       │   │   ├── HasParameters.php
│   │   │   │       │   │   ├── InteractsWithIO.php
│   │   │   │       │   │   ├── InteractsWithSignals.php
│   │   │   │       │   │   └── PromptsForMissingInput.php
│   │   │   │       │   ├── Contracts
│   │   │   │       │   │   └── NewLineAware.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── ArtisanStarting.php
│   │   │   │       │   │   ├── CommandFinished.php
│   │   │   │       │   │   ├── CommandStarting.php
│   │   │   │       │   │   ├── ScheduledBackgroundTaskFinished.php
│   │   │   │       │   │   ├── ScheduledTaskFailed.php
│   │   │   │       │   │   ├── ScheduledTaskFinished.php
│   │   │   │       │   │   ├── ScheduledTaskSkipped.php
│   │   │   │       │   │   └── ScheduledTaskStarting.php
│   │   │   │       │   ├── resources
│   │   │   │       │   │   └── views
│   │   │   │       │   │       └── components
│   │   │   │       │   │           ├── alert.php
│   │   │   │       │   │           ├── bullet-list.php
│   │   │   │       │   │           ├── line.php
│   │   │   │       │   │           └── two-column-detail.php
│   │   │   │       │   ├── Scheduling
│   │   │   │       │   │   ├── CacheAware.php
│   │   │   │       │   │   ├── CacheEventMutex.php
│   │   │   │       │   │   ├── CacheSchedulingMutex.php
│   │   │   │       │   │   ├── CallbackEvent.php
│   │   │   │       │   │   ├── CommandBuilder.php
│   │   │   │       │   │   ├── Event.php
│   │   │   │       │   │   ├── EventMutex.php
│   │   │   │       │   │   ├── ManagesAttributes.php
│   │   │   │       │   │   ├── ManagesFrequencies.php
│   │   │   │       │   │   ├── PendingEventAttributes.php
│   │   │   │       │   │   ├── Schedule.php
│   │   │   │       │   │   ├── ScheduleClearCacheCommand.php
│   │   │   │       │   │   ├── ScheduleFinishCommand.php
│   │   │   │       │   │   ├── ScheduleInterruptCommand.php
│   │   │   │       │   │   ├── ScheduleListCommand.php
│   │   │   │       │   │   ├── ScheduleRunCommand.php
│   │   │   │       │   │   ├── ScheduleTestCommand.php
│   │   │   │       │   │   ├── ScheduleWorkCommand.php
│   │   │   │       │   │   └── SchedulingMutex.php
│   │   │   │       │   ├── View
│   │   │   │       │   │   └── Components
│   │   │   │       │   │       ├── Mutators
│   │   │   │       │   │       │   ├── EnsureDynamicContentIsHighlighted.php
│   │   │   │       │   │       │   ├── EnsureNoPunctuation.php
│   │   │   │       │   │       │   ├── EnsurePunctuation.php
│   │   │   │       │   │       │   └── EnsureRelativePaths.php
│   │   │   │       │   │       ├── Alert.php
│   │   │   │       │   │       ├── Ask.php
│   │   │   │       │   │       ├── AskWithCompletion.php
│   │   │   │       │   │       ├── BulletList.php
│   │   │   │       │   │       ├── Choice.php
│   │   │   │       │   │       ├── Component.php
│   │   │   │       │   │       ├── Confirm.php
│   │   │   │       │   │       ├── Error.php
│   │   │   │       │   │       ├── Factory.php
│   │   │   │       │   │       ├── Info.php
│   │   │   │       │   │       ├── Line.php
│   │   │   │       │   │       ├── Secret.php
│   │   │   │       │   │       ├── Success.php
│   │   │   │       │   │       ├── Task.php
│   │   │   │       │   │       ├── TwoColumnDetail.php
│   │   │   │       │   │       └── Warn.php
│   │   │   │       │   ├── Application.php
│   │   │   │       │   ├── BufferedConsoleOutput.php
│   │   │   │       │   ├── CacheCommandMutex.php
│   │   │   │       │   ├── Command.php
│   │   │   │       │   ├── CommandMutex.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── ConfirmableTrait.php
│   │   │   │       │   ├── ContainerCommandLoader.php
│   │   │   │       │   ├── GeneratorCommand.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── ManuallyFailedException.php
│   │   │   │       │   ├── MigrationGeneratorCommand.php
│   │   │   │       │   ├── OutputStyle.php
│   │   │   │       │   ├── Parser.php
│   │   │   │       │   ├── Prohibitable.php
│   │   │   │       │   ├── PromptValidationException.php
│   │   │   │       │   ├── QuestionHelper.php
│   │   │   │       │   └── Signals.php
│   │   │   │       ├── Container
│   │   │   │       │   ├── Attributes
│   │   │   │       │   │   ├── Auth.php
│   │   │   │       │   │   ├── Authenticated.php
│   │   │   │       │   │   ├── Cache.php
│   │   │   │       │   │   ├── Config.php
│   │   │   │       │   │   ├── CurrentUser.php
│   │   │   │       │   │   ├── Database.php
│   │   │   │       │   │   ├── DB.php
│   │   │   │       │   │   ├── Log.php
│   │   │   │       │   │   ├── RouteParameter.php
│   │   │   │       │   │   ├── Storage.php
│   │   │   │       │   │   └── Tag.php
│   │   │   │       │   ├── BoundMethod.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Container.php
│   │   │   │       │   ├── ContextualBindingBuilder.php
│   │   │   │       │   ├── EntryNotFoundException.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── RewindableGenerator.php
│   │   │   │       │   └── Util.php
│   │   │   │       ├── Contracts
│   │   │   │       │   ├── Auth
│   │   │   │       │   │   ├── Access
│   │   │   │       │   │   │   ├── Authorizable.php
│   │   │   │       │   │   │   └── Gate.php
│   │   │   │       │   │   ├── Middleware
│   │   │   │       │   │   │   └── AuthenticatesRequests.php
│   │   │   │       │   │   ├── Authenticatable.php
│   │   │   │       │   │   ├── CanResetPassword.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── Guard.php
│   │   │   │       │   │   ├── MustVerifyEmail.php
│   │   │   │       │   │   ├── PasswordBroker.php
│   │   │   │       │   │   ├── PasswordBrokerFactory.php
│   │   │   │       │   │   ├── StatefulGuard.php
│   │   │   │       │   │   ├── SupportsBasicAuth.php
│   │   │   │       │   │   └── UserProvider.php
│   │   │   │       │   ├── Broadcasting
│   │   │   │       │   │   ├── Broadcaster.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── HasBroadcastChannel.php
│   │   │   │       │   │   ├── ShouldBeUnique.php
│   │   │   │       │   │   ├── ShouldBroadcast.php
│   │   │   │       │   │   └── ShouldBroadcastNow.php
│   │   │   │       │   ├── Bus
│   │   │   │       │   │   ├── Dispatcher.php
│   │   │   │       │   │   └── QueueingDispatcher.php
│   │   │   │       │   ├── Cache
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── Lock.php
│   │   │   │       │   │   ├── LockProvider.php
│   │   │   │       │   │   ├── LockTimeoutException.php
│   │   │   │       │   │   ├── Repository.php
│   │   │   │       │   │   └── Store.php
│   │   │   │       │   ├── Concurrency
│   │   │   │       │   │   └── Driver.php
│   │   │   │       │   ├── Config
│   │   │   │       │   │   └── Repository.php
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── Application.php
│   │   │   │       │   │   ├── Isolatable.php
│   │   │   │       │   │   ├── Kernel.php
│   │   │   │       │   │   └── PromptsForMissingInput.php
│   │   │   │       │   ├── Container
│   │   │   │       │   │   ├── BindingResolutionException.php
│   │   │   │       │   │   ├── CircularDependencyException.php
│   │   │   │       │   │   ├── Container.php
│   │   │   │       │   │   ├── ContextualAttribute.php
│   │   │   │       │   │   └── ContextualBindingBuilder.php
│   │   │   │       │   ├── Cookie
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   └── QueueingFactory.php
│   │   │   │       │   ├── Database
│   │   │   │       │   │   ├── Eloquent
│   │   │   │       │   │   │   ├── Builder.php
│   │   │   │       │   │   │   ├── Castable.php
│   │   │   │       │   │   │   ├── CastsAttributes.php
│   │   │   │       │   │   │   ├── CastsInboundAttributes.php
│   │   │   │       │   │   │   ├── DeviatesCastableAttributes.php
│   │   │   │       │   │   │   ├── SerializesCastableAttributes.php
│   │   │   │       │   │   │   └── SupportsPartialRelations.php
│   │   │   │       │   │   ├── Events
│   │   │   │       │   │   │   └── MigrationEvent.php
│   │   │   │       │   │   ├── Query
│   │   │   │       │   │   │   ├── Builder.php
│   │   │   │       │   │   │   ├── ConditionExpression.php
│   │   │   │       │   │   │   └── Expression.php
│   │   │   │       │   │   └── ModelIdentifier.php
│   │   │   │       │   ├── Debug
│   │   │   │       │   │   ├── ExceptionHandler.php
│   │   │   │       │   │   └── ShouldntReport.php
│   │   │   │       │   ├── Encryption
│   │   │   │       │   │   ├── DecryptException.php
│   │   │   │       │   │   ├── Encrypter.php
│   │   │   │       │   │   ├── EncryptException.php
│   │   │   │       │   │   └── StringEncrypter.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── Dispatcher.php
│   │   │   │       │   │   ├── ShouldDispatchAfterCommit.php
│   │   │   │       │   │   └── ShouldHandleEventsAfterCommit.php
│   │   │   │       │   ├── Filesystem
│   │   │   │       │   │   ├── Cloud.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── FileNotFoundException.php
│   │   │   │       │   │   ├── Filesystem.php
│   │   │   │       │   │   └── LockTimeoutException.php
│   │   │   │       │   ├── Foundation
│   │   │   │       │   │   ├── Application.php
│   │   │   │       │   │   ├── CachesConfiguration.php
│   │   │   │       │   │   ├── CachesRoutes.php
│   │   │   │       │   │   ├── ExceptionRenderer.php
│   │   │   │       │   │   └── MaintenanceMode.php
│   │   │   │       │   ├── Hashing
│   │   │   │       │   │   └── Hasher.php
│   │   │   │       │   ├── Http
│   │   │   │       │   │   └── Kernel.php
│   │   │   │       │   ├── Log
│   │   │   │       │   │   └── ContextLogProcessor.php
│   │   │   │       │   ├── Mail
│   │   │   │       │   │   ├── Attachable.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── Mailable.php
│   │   │   │       │   │   ├── Mailer.php
│   │   │   │       │   │   └── MailQueue.php
│   │   │   │       │   ├── Notifications
│   │   │   │       │   │   ├── Dispatcher.php
│   │   │   │       │   │   └── Factory.php
│   │   │   │       │   ├── Pagination
│   │   │   │       │   │   ├── CursorPaginator.php
│   │   │   │       │   │   ├── LengthAwarePaginator.php
│   │   │   │       │   │   └── Paginator.php
│   │   │   │       │   ├── Pipeline
│   │   │   │       │   │   ├── Hub.php
│   │   │   │       │   │   └── Pipeline.php
│   │   │   │       │   ├── Process
│   │   │   │       │   │   ├── InvokedProcess.php
│   │   │   │       │   │   └── ProcessResult.php
│   │   │   │       │   ├── Queue
│   │   │   │       │   │   ├── ClearableQueue.php
│   │   │   │       │   │   ├── EntityNotFoundException.php
│   │   │   │       │   │   ├── EntityResolver.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── Job.php
│   │   │   │       │   │   ├── Monitor.php
│   │   │   │       │   │   ├── Queue.php
│   │   │   │       │   │   ├── QueueableCollection.php
│   │   │   │       │   │   ├── QueueableEntity.php
│   │   │   │       │   │   ├── ShouldBeEncrypted.php
│   │   │   │       │   │   ├── ShouldBeUnique.php
│   │   │   │       │   │   ├── ShouldBeUniqueUntilProcessing.php
│   │   │   │       │   │   ├── ShouldQueue.php
│   │   │   │       │   │   └── ShouldQueueAfterCommit.php
│   │   │   │       │   ├── Redis
│   │   │   │       │   │   ├── Connection.php
│   │   │   │       │   │   ├── Connector.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   └── LimiterTimeoutException.php
│   │   │   │       │   ├── Routing
│   │   │   │       │   │   ├── BindingRegistrar.php
│   │   │   │       │   │   ├── Registrar.php
│   │   │   │       │   │   ├── ResponseFactory.php
│   │   │   │       │   │   ├── UrlGenerator.php
│   │   │   │       │   │   └── UrlRoutable.php
│   │   │   │       │   ├── Session
│   │   │   │       │   │   ├── Middleware
│   │   │   │       │   │   │   └── AuthenticatesSessions.php
│   │   │   │       │   │   └── Session.php
│   │   │   │       │   ├── Support
│   │   │   │       │   │   ├── Arrayable.php
│   │   │   │       │   │   ├── CanBeEscapedWhenCastToString.php
│   │   │   │       │   │   ├── DeferrableProvider.php
│   │   │   │       │   │   ├── DeferringDisplayableValue.php
│   │   │   │       │   │   ├── Htmlable.php
│   │   │   │       │   │   ├── Jsonable.php
│   │   │   │       │   │   ├── MessageBag.php
│   │   │   │       │   │   ├── MessageProvider.php
│   │   │   │       │   │   ├── Renderable.php
│   │   │   │       │   │   ├── Responsable.php
│   │   │   │       │   │   └── ValidatedData.php
│   │   │   │       │   ├── Translation
│   │   │   │       │   │   ├── HasLocalePreference.php
│   │   │   │       │   │   ├── Loader.php
│   │   │   │       │   │   └── Translator.php
│   │   │   │       │   ├── Validation
│   │   │   │       │   │   ├── CompilableRules.php
│   │   │   │       │   │   ├── DataAwareRule.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── ImplicitRule.php
│   │   │   │       │   │   ├── InvokableRule.php
│   │   │   │       │   │   ├── Rule.php
│   │   │   │       │   │   ├── UncompromisedVerifier.php
│   │   │   │       │   │   ├── ValidatesWhenResolved.php
│   │   │   │       │   │   ├── ValidationRule.php
│   │   │   │       │   │   ├── Validator.php
│   │   │   │       │   │   └── ValidatorAwareRule.php
│   │   │   │       │   ├── View
│   │   │   │       │   │   ├── Engine.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── View.php
│   │   │   │       │   │   └── ViewCompilationException.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   └── LICENSE.md
│   │   │   │       ├── Cookie
│   │   │   │       │   ├── Middleware
│   │   │   │       │   │   ├── AddQueuedCookiesToResponse.php
│   │   │   │       │   │   └── EncryptCookies.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── CookieJar.php
│   │   │   │       │   ├── CookieServiceProvider.php
│   │   │   │       │   ├── CookieValuePrefix.php
│   │   │   │       │   └── LICENSE.md
│   │   │   │       ├── Database
│   │   │   │       │   ├── Capsule
│   │   │   │       │   │   └── Manager.php
│   │   │   │       │   ├── Concerns
│   │   │   │       │   │   ├── BuildsQueries.php
│   │   │   │       │   │   ├── BuildsWhereDateClauses.php
│   │   │   │       │   │   ├── CompilesJsonPaths.php
│   │   │   │       │   │   ├── ExplainsQueries.php
│   │   │   │       │   │   ├── ManagesTransactions.php
│   │   │   │       │   │   └── ParsesSearchPath.php
│   │   │   │       │   ├── Connectors
│   │   │   │       │   │   ├── ConnectionFactory.php
│   │   │   │       │   │   ├── Connector.php
│   │   │   │       │   │   ├── ConnectorInterface.php
│   │   │   │       │   │   ├── MariaDbConnector.php
│   │   │   │       │   │   ├── MySqlConnector.php
│   │   │   │       │   │   ├── PostgresConnector.php
│   │   │   │       │   │   ├── SQLiteConnector.php
│   │   │   │       │   │   └── SqlServerConnector.php
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── Factories
│   │   │   │       │   │   │   ├── stubs
│   │   │   │       │   │   │   │   └── factory.stub
│   │   │   │       │   │   │   └── FactoryMakeCommand.php
│   │   │   │       │   │   ├── Migrations
│   │   │   │       │   │   │   ├── BaseCommand.php
│   │   │   │       │   │   │   ├── FreshCommand.php
│   │   │   │       │   │   │   ├── InstallCommand.php
│   │   │   │       │   │   │   ├── MigrateCommand.php
│   │   │   │       │   │   │   ├── MigrateMakeCommand.php
│   │   │   │       │   │   │   ├── RefreshCommand.php
│   │   │   │       │   │   │   ├── ResetCommand.php
│   │   │   │       │   │   │   ├── RollbackCommand.php
│   │   │   │       │   │   │   ├── StatusCommand.php
│   │   │   │       │   │   │   └── TableGuesser.php
│   │   │   │       │   │   ├── Seeds
│   │   │   │       │   │   │   ├── stubs
│   │   │   │       │   │   │   │   └── seeder.stub
│   │   │   │       │   │   │   ├── SeedCommand.php
│   │   │   │       │   │   │   ├── SeederMakeCommand.php
│   │   │   │       │   │   │   └── WithoutModelEvents.php
│   │   │   │       │   │   ├── DatabaseInspectionCommand.php
│   │   │   │       │   │   ├── DbCommand.php
│   │   │   │       │   │   ├── DumpCommand.php
│   │   │   │       │   │   ├── MonitorCommand.php
│   │   │   │       │   │   ├── PruneCommand.php
│   │   │   │       │   │   ├── ShowCommand.php
│   │   │   │       │   │   ├── ShowModelCommand.php
│   │   │   │       │   │   ├── TableCommand.php
│   │   │   │       │   │   └── WipeCommand.php
│   │   │   │       │   ├── Eloquent
│   │   │   │       │   │   ├── Attributes
│   │   │   │       │   │   │   ├── CollectedBy.php
│   │   │   │       │   │   │   ├── ObservedBy.php
│   │   │   │       │   │   │   ├── Scope.php
│   │   │   │       │   │   │   ├── ScopedBy.php
│   │   │   │       │   │   │   └── UseFactory.php
│   │   │   │       │   │   ├── Casts
│   │   │   │       │   │   │   ├── ArrayObject.php
│   │   │   │       │   │   │   ├── AsArrayObject.php
│   │   │   │       │   │   │   ├── AsCollection.php
│   │   │   │       │   │   │   ├── AsEncryptedArrayObject.php
│   │   │   │       │   │   │   ├── AsEncryptedCollection.php
│   │   │   │       │   │   │   ├── AsEnumArrayObject.php
│   │   │   │       │   │   │   ├── AsEnumCollection.php
│   │   │   │       │   │   │   ├── AsHtmlString.php
│   │   │   │       │   │   │   ├── AsStringable.php
│   │   │   │       │   │   │   ├── Attribute.php
│   │   │   │       │   │   │   └── Json.php
│   │   │   │       │   │   ├── Concerns
│   │   │   │       │   │   │   ├── GuardsAttributes.php
│   │   │   │       │   │   │   ├── HasAttributes.php
│   │   │   │       │   │   │   ├── HasEvents.php
│   │   │   │       │   │   │   ├── HasGlobalScopes.php
│   │   │   │       │   │   │   ├── HasRelationships.php
│   │   │   │       │   │   │   ├── HasTimestamps.php
│   │   │   │       │   │   │   ├── HasUlids.php
│   │   │   │       │   │   │   ├── HasUniqueIds.php
│   │   │   │       │   │   │   ├── HasUniqueStringIds.php
│   │   │   │       │   │   │   ├── HasUuids.php
│   │   │   │       │   │   │   ├── HasVersion4Uuids.php
│   │   │   │       │   │   │   ├── HidesAttributes.php
│   │   │   │       │   │   │   ├── PreventsCircularRecursion.php
│   │   │   │       │   │   │   ├── QueriesRelationships.php
│   │   │   │       │   │   │   └── TransformsToResource.php
│   │   │   │       │   │   ├── Factories
│   │   │   │       │   │   │   ├── BelongsToManyRelationship.php
│   │   │   │       │   │   │   ├── BelongsToRelationship.php
│   │   │   │       │   │   │   ├── CrossJoinSequence.php
│   │   │   │       │   │   │   ├── Factory.php
│   │   │   │       │   │   │   ├── HasFactory.php
│   │   │   │       │   │   │   ├── Relationship.php
│   │   │   │       │   │   │   └── Sequence.php
│   │   │   │       │   │   ├── Relations
│   │   │   │       │   │   │   ├── Concerns
│   │   │   │       │   │   │   │   ├── AsPivot.php
│   │   │   │       │   │   │   │   ├── CanBeOneOfMany.php
│   │   │   │       │   │   │   │   ├── ComparesRelatedModels.php
│   │   │   │       │   │   │   │   ├── InteractsWithDictionary.php
│   │   │   │       │   │   │   │   ├── InteractsWithPivotTable.php
│   │   │   │       │   │   │   │   ├── SupportsDefaultModels.php
│   │   │   │       │   │   │   │   └── SupportsInverseRelations.php
│   │   │   │       │   │   │   ├── BelongsTo.php
│   │   │   │       │   │   │   ├── BelongsToMany.php
│   │   │   │       │   │   │   ├── HasMany.php
│   │   │   │       │   │   │   ├── HasManyThrough.php
│   │   │   │       │   │   │   ├── HasOne.php
│   │   │   │       │   │   │   ├── HasOneOrMany.php
│   │   │   │       │   │   │   ├── HasOneOrManyThrough.php
│   │   │   │       │   │   │   ├── HasOneThrough.php
│   │   │   │       │   │   │   ├── MorphMany.php
│   │   │   │       │   │   │   ├── MorphOne.php
│   │   │   │       │   │   │   ├── MorphOneOrMany.php
│   │   │   │       │   │   │   ├── MorphPivot.php
│   │   │   │       │   │   │   ├── MorphTo.php
│   │   │   │       │   │   │   ├── MorphToMany.php
│   │   │   │       │   │   │   ├── Pivot.php
│   │   │   │       │   │   │   └── Relation.php
│   │   │   │       │   │   ├── BroadcastableModelEventOccurred.php
│   │   │   │       │   │   ├── BroadcastsEvents.php
│   │   │   │       │   │   ├── BroadcastsEventsAfterCommit.php
│   │   │   │       │   │   ├── Builder.php
│   │   │   │       │   │   ├── Collection.php
│   │   │   │       │   │   ├── HasBuilder.php
│   │   │   │       │   │   ├── HasCollection.php
│   │   │   │       │   │   ├── HigherOrderBuilderProxy.php
│   │   │   │       │   │   ├── InvalidCastException.php
│   │   │   │       │   │   ├── JsonEncodingException.php
│   │   │   │       │   │   ├── MassAssignmentException.php
│   │   │   │       │   │   ├── MassPrunable.php
│   │   │   │       │   │   ├── MissingAttributeException.php
│   │   │   │       │   │   ├── Model.php
│   │   │   │       │   │   ├── ModelInspector.php
│   │   │   │       │   │   ├── ModelNotFoundException.php
│   │   │   │       │   │   ├── PendingHasThroughRelationship.php
│   │   │   │       │   │   ├── Prunable.php
│   │   │   │       │   │   ├── QueueEntityResolver.php
│   │   │   │       │   │   ├── RelationNotFoundException.php
│   │   │   │       │   │   ├── Scope.php
│   │   │   │       │   │   ├── SoftDeletes.php
│   │   │   │       │   │   └── SoftDeletingScope.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── ConnectionEstablished.php
│   │   │   │       │   │   ├── ConnectionEvent.php
│   │   │   │       │   │   ├── DatabaseBusy.php
│   │   │   │       │   │   ├── DatabaseRefreshed.php
│   │   │   │       │   │   ├── MigrationEnded.php
│   │   │   │       │   │   ├── MigrationEvent.php
│   │   │   │       │   │   ├── MigrationsEnded.php
│   │   │   │       │   │   ├── MigrationsEvent.php
│   │   │   │       │   │   ├── MigrationsPruned.php
│   │   │   │       │   │   ├── MigrationsStarted.php
│   │   │   │       │   │   ├── MigrationStarted.php
│   │   │   │       │   │   ├── ModelPruningFinished.php
│   │   │   │       │   │   ├── ModelPruningStarting.php
│   │   │   │       │   │   ├── ModelsPruned.php
│   │   │   │       │   │   ├── NoPendingMigrations.php
│   │   │   │       │   │   ├── QueryExecuted.php
│   │   │   │       │   │   ├── SchemaDumped.php
│   │   │   │       │   │   ├── SchemaLoaded.php
│   │   │   │       │   │   ├── StatementPrepared.php
│   │   │   │       │   │   ├── TransactionBeginning.php
│   │   │   │       │   │   ├── TransactionCommitted.php
│   │   │   │       │   │   ├── TransactionCommitting.php
│   │   │   │       │   │   └── TransactionRolledBack.php
│   │   │   │       │   ├── Migrations
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   ├── migration.create.stub
│   │   │   │       │   │   │   ├── migration.stub
│   │   │   │       │   │   │   └── migration.update.stub
│   │   │   │       │   │   ├── DatabaseMigrationRepository.php
│   │   │   │       │   │   ├── Migration.php
│   │   │   │       │   │   ├── MigrationCreator.php
│   │   │   │       │   │   ├── MigrationRepositoryInterface.php
│   │   │   │       │   │   ├── MigrationResult.php
│   │   │   │       │   │   └── Migrator.php
│   │   │   │       │   ├── Query
│   │   │   │       │   │   ├── Grammars
│   │   │   │       │   │   │   ├── Grammar.php
│   │   │   │       │   │   │   ├── MariaDbGrammar.php
│   │   │   │       │   │   │   ├── MySqlGrammar.php
│   │   │   │       │   │   │   ├── PostgresGrammar.php
│   │   │   │       │   │   │   ├── SQLiteGrammar.php
│   │   │   │       │   │   │   └── SqlServerGrammar.php
│   │   │   │       │   │   ├── Processors
│   │   │   │       │   │   │   ├── MariaDbProcessor.php
│   │   │   │       │   │   │   ├── MySqlProcessor.php
│   │   │   │       │   │   │   ├── PostgresProcessor.php
│   │   │   │       │   │   │   ├── Processor.php
│   │   │   │       │   │   │   ├── SQLiteProcessor.php
│   │   │   │       │   │   │   └── SqlServerProcessor.php
│   │   │   │       │   │   ├── Builder.php
│   │   │   │       │   │   ├── Expression.php
│   │   │   │       │   │   ├── IndexHint.php
│   │   │   │       │   │   ├── JoinClause.php
│   │   │   │       │   │   └── JoinLateralClause.php
│   │   │   │       │   ├── Schema
│   │   │   │       │   │   ├── Grammars
│   │   │   │       │   │   │   ├── Grammar.php
│   │   │   │       │   │   │   ├── MariaDbGrammar.php
│   │   │   │       │   │   │   ├── MySqlGrammar.php
│   │   │   │       │   │   │   ├── PostgresGrammar.php
│   │   │   │       │   │   │   ├── SQLiteGrammar.php
│   │   │   │       │   │   │   └── SqlServerGrammar.php
│   │   │   │       │   │   ├── Blueprint.php
│   │   │   │       │   │   ├── BlueprintState.php
│   │   │   │       │   │   ├── Builder.php
│   │   │   │       │   │   ├── ColumnDefinition.php
│   │   │   │       │   │   ├── ForeignIdColumnDefinition.php
│   │   │   │       │   │   ├── ForeignKeyDefinition.php
│   │   │   │       │   │   ├── IndexDefinition.php
│   │   │   │       │   │   ├── MariaDbBuilder.php
│   │   │   │       │   │   ├── MariaDbSchemaState.php
│   │   │   │       │   │   ├── MySqlBuilder.php
│   │   │   │       │   │   ├── MySqlSchemaState.php
│   │   │   │       │   │   ├── PostgresBuilder.php
│   │   │   │       │   │   ├── PostgresSchemaState.php
│   │   │   │       │   │   ├── SchemaState.php
│   │   │   │       │   │   ├── SQLiteBuilder.php
│   │   │   │       │   │   ├── SqliteSchemaState.php
│   │   │   │       │   │   └── SqlServerBuilder.php
│   │   │   │       │   ├── ClassMorphViolationException.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── ConfigurationUrlParser.php
│   │   │   │       │   ├── Connection.php
│   │   │   │       │   ├── ConnectionInterface.php
│   │   │   │       │   ├── ConnectionResolver.php
│   │   │   │       │   ├── ConnectionResolverInterface.php
│   │   │   │       │   ├── DatabaseManager.php
│   │   │   │       │   ├── DatabaseServiceProvider.php
│   │   │   │       │   ├── DatabaseTransactionRecord.php
│   │   │   │       │   ├── DatabaseTransactionsManager.php
│   │   │   │       │   ├── DeadlockException.php
│   │   │   │       │   ├── DetectsConcurrencyErrors.php
│   │   │   │       │   ├── DetectsLostConnections.php
│   │   │   │       │   ├── Grammar.php
│   │   │   │       │   ├── LazyLoadingViolationException.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── LostConnectionException.php
│   │   │   │       │   ├── MariaDbConnection.php
│   │   │   │       │   ├── MigrationServiceProvider.php
│   │   │   │       │   ├── MultipleColumnsSelectedException.php
│   │   │   │       │   ├── MultipleRecordsFoundException.php
│   │   │   │       │   ├── MySqlConnection.php
│   │   │   │       │   ├── PostgresConnection.php
│   │   │   │       │   ├── QueryException.php
│   │   │   │       │   ├── README.md
│   │   │   │       │   ├── RecordNotFoundException.php
│   │   │   │       │   ├── RecordsNotFoundException.php
│   │   │   │       │   ├── Seeder.php
│   │   │   │       │   ├── SQLiteConnection.php
│   │   │   │       │   ├── SQLiteDatabaseDoesNotExistException.php
│   │   │   │       │   ├── SqlServerConnection.php
│   │   │   │       │   └── UniqueConstraintViolationException.php
│   │   │   │       ├── Encryption
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Encrypter.php
│   │   │   │       │   ├── EncryptionServiceProvider.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   └── MissingAppKeyException.php
│   │   │   │       ├── Events
│   │   │   │       │   ├── CallQueuedListener.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Dispatcher.php
│   │   │   │       │   ├── EventServiceProvider.php
│   │   │   │       │   ├── functions.php
│   │   │   │       │   ├── InvokeQueuedClosure.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── NullDispatcher.php
│   │   │   │       │   └── QueuedClosure.php
│   │   │   │       ├── Filesystem
│   │   │   │       │   ├── AwsS3V3Adapter.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Filesystem.php
│   │   │   │       │   ├── FilesystemAdapter.php
│   │   │   │       │   ├── FilesystemManager.php
│   │   │   │       │   ├── FilesystemServiceProvider.php
│   │   │   │       │   ├── functions.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── LocalFilesystemAdapter.php
│   │   │   │       │   ├── LockableFile.php
│   │   │   │       │   └── ServeFile.php
│   │   │   │       ├── Foundation
│   │   │   │       │   ├── Auth
│   │   │   │       │   │   ├── Access
│   │   │   │       │   │   │   ├── Authorizable.php
│   │   │   │       │   │   │   └── AuthorizesRequests.php
│   │   │   │       │   │   ├── EmailVerificationRequest.php
│   │   │   │       │   │   └── User.php
│   │   │   │       │   ├── Bootstrap
│   │   │   │       │   │   ├── BootProviders.php
│   │   │   │       │   │   ├── HandleExceptions.php
│   │   │   │       │   │   ├── LoadConfiguration.php
│   │   │   │       │   │   ├── LoadEnvironmentVariables.php
│   │   │   │       │   │   ├── RegisterFacades.php
│   │   │   │       │   │   ├── RegisterProviders.php
│   │   │   │       │   │   └── SetRequestForConsole.php
│   │   │   │       │   ├── Bus
│   │   │   │       │   │   ├── Dispatchable.php
│   │   │   │       │   │   ├── DispatchesJobs.php
│   │   │   │       │   │   ├── PendingChain.php
│   │   │   │       │   │   ├── PendingClosureDispatch.php
│   │   │   │       │   │   └── PendingDispatch.php
│   │   │   │       │   ├── Concerns
│   │   │   │       │   │   └── ResolvesDumpSource.php
│   │   │   │       │   ├── Configuration
│   │   │   │       │   │   ├── ApplicationBuilder.php
│   │   │   │       │   │   ├── Exceptions.php
│   │   │   │       │   │   └── Middleware.php
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   ├── api-routes.stub
│   │   │   │       │   │   │   ├── broadcasting-routes.stub
│   │   │   │       │   │   │   ├── cast.inbound.stub
│   │   │   │       │   │   │   ├── cast.stub
│   │   │   │       │   │   │   ├── channel.stub
│   │   │   │       │   │   │   ├── class.invokable.stub
│   │   │   │       │   │   │   ├── class.stub
│   │   │   │       │   │   │   ├── console.stub
│   │   │   │       │   │   │   ├── echo-bootstrap-js.stub
│   │   │   │       │   │   │   ├── echo-js.stub
│   │   │   │       │   │   │   ├── enum.backed.stub
│   │   │   │       │   │   │   ├── enum.stub
│   │   │   │       │   │   │   ├── event.stub
│   │   │   │       │   │   │   ├── exception-render-report.stub
│   │   │   │       │   │   │   ├── exception-render.stub
│   │   │   │       │   │   │   ├── exception-report.stub
│   │   │   │       │   │   │   ├── exception.stub
│   │   │   │       │   │   │   ├── interface.stub
│   │   │   │       │   │   │   ├── job.middleware.stub
│   │   │   │       │   │   │   ├── job.queued.stub
│   │   │   │       │   │   │   ├── job.stub
│   │   │   │       │   │   │   ├── listener.queued.stub
│   │   │   │       │   │   │   ├── listener.stub
│   │   │   │       │   │   │   ├── listener.typed.queued.stub
│   │   │   │       │   │   │   ├── listener.typed.stub
│   │   │   │       │   │   │   ├── mail.stub
│   │   │   │       │   │   │   ├── maintenance-mode.stub
│   │   │   │       │   │   │   ├── markdown-mail.stub
│   │   │   │       │   │   │   ├── markdown-notification.stub
│   │   │   │       │   │   │   ├── markdown.stub
│   │   │   │       │   │   │   ├── model.morph-pivot.stub
│   │   │   │       │   │   │   ├── model.pivot.stub
│   │   │   │       │   │   │   ├── model.stub
│   │   │   │       │   │   │   ├── notification.stub
│   │   │   │       │   │   │   ├── observer.plain.stub
│   │   │   │       │   │   │   ├── observer.stub
│   │   │   │       │   │   │   ├── pest.stub
│   │   │   │       │   │   │   ├── pest.unit.stub
│   │   │   │       │   │   │   ├── policy.plain.stub
│   │   │   │       │   │   │   ├── policy.stub
│   │   │   │       │   │   │   ├── provider.stub
│   │   │   │       │   │   │   ├── request.stub
│   │   │   │       │   │   │   ├── resource-collection.stub
│   │   │   │       │   │   │   ├── resource.stub
│   │   │   │       │   │   │   ├── routes.stub
│   │   │   │       │   │   │   ├── rule.implicit.stub
│   │   │   │       │   │   │   ├── rule.stub
│   │   │   │       │   │   │   ├── scope.stub
│   │   │   │       │   │   │   ├── test.stub
│   │   │   │       │   │   │   ├── test.unit.stub
│   │   │   │       │   │   │   ├── trait.stub
│   │   │   │       │   │   │   ├── view-component.stub
│   │   │   │       │   │   │   ├── view-mail.stub
│   │   │   │       │   │   │   ├── view.pest.stub
│   │   │   │       │   │   │   ├── view.stub
│   │   │   │       │   │   │   └── view.test.stub
│   │   │   │       │   │   ├── AboutCommand.php
│   │   │   │       │   │   ├── ApiInstallCommand.php
│   │   │   │       │   │   ├── BroadcastingInstallCommand.php
│   │   │   │       │   │   ├── CastMakeCommand.php
│   │   │   │       │   │   ├── ChannelListCommand.php
│   │   │   │       │   │   ├── ChannelMakeCommand.php
│   │   │   │       │   │   ├── ClassMakeCommand.php
│   │   │   │       │   │   ├── ClearCompiledCommand.php
│   │   │   │       │   │   ├── CliDumper.php
│   │   │   │       │   │   ├── ClosureCommand.php
│   │   │   │       │   │   ├── ComponentMakeCommand.php
│   │   │   │       │   │   ├── ConfigCacheCommand.php
│   │   │   │       │   │   ├── ConfigClearCommand.php
│   │   │   │       │   │   ├── ConfigPublishCommand.php
│   │   │   │       │   │   ├── ConfigShowCommand.php
│   │   │   │       │   │   ├── ConsoleMakeCommand.php
│   │   │   │       │   │   ├── DocsCommand.php
│   │   │   │       │   │   ├── DownCommand.php
│   │   │   │       │   │   ├── EnumMakeCommand.php
│   │   │   │       │   │   ├── EnvironmentCommand.php
│   │   │   │       │   │   ├── EnvironmentDecryptCommand.php
│   │   │   │       │   │   ├── EnvironmentEncryptCommand.php
│   │   │   │       │   │   ├── EventCacheCommand.php
│   │   │   │       │   │   ├── EventClearCommand.php
│   │   │   │       │   │   ├── EventGenerateCommand.php
│   │   │   │       │   │   ├── EventListCommand.php
│   │   │   │       │   │   ├── EventMakeCommand.php
│   │   │   │       │   │   ├── ExceptionMakeCommand.php
│   │   │   │       │   │   ├── InteractsWithComposerPackages.php
│   │   │   │       │   │   ├── InterfaceMakeCommand.php
│   │   │   │       │   │   ├── JobMakeCommand.php
│   │   │   │       │   │   ├── JobMiddlewareMakeCommand.php
│   │   │   │       │   │   ├── Kernel.php
│   │   │   │       │   │   ├── KeyGenerateCommand.php
│   │   │   │       │   │   ├── LangPublishCommand.php
│   │   │   │       │   │   ├── ListenerMakeCommand.php
│   │   │   │       │   │   ├── MailMakeCommand.php
│   │   │   │       │   │   ├── ModelMakeCommand.php
│   │   │   │       │   │   ├── NotificationMakeCommand.php
│   │   │   │       │   │   ├── ObserverMakeCommand.php
│   │   │   │       │   │   ├── OptimizeClearCommand.php
│   │   │   │       │   │   ├── OptimizeCommand.php
│   │   │   │       │   │   ├── PackageDiscoverCommand.php
│   │   │   │       │   │   ├── PolicyMakeCommand.php
│   │   │   │       │   │   ├── ProviderMakeCommand.php
│   │   │   │       │   │   ├── QueuedCommand.php
│   │   │   │       │   │   ├── RequestMakeCommand.php
│   │   │   │       │   │   ├── ResourceMakeCommand.php
│   │   │   │       │   │   ├── RouteCacheCommand.php
│   │   │   │       │   │   ├── RouteClearCommand.php
│   │   │   │       │   │   ├── RouteListCommand.php
│   │   │   │       │   │   ├── RuleMakeCommand.php
│   │   │   │       │   │   ├── ScopeMakeCommand.php
│   │   │   │       │   │   ├── ServeCommand.php
│   │   │   │       │   │   ├── StorageLinkCommand.php
│   │   │   │       │   │   ├── StorageUnlinkCommand.php
│   │   │   │       │   │   ├── StubPublishCommand.php
│   │   │   │       │   │   ├── TestMakeCommand.php
│   │   │   │       │   │   ├── TraitMakeCommand.php
│   │   │   │       │   │   ├── UpCommand.php
│   │   │   │       │   │   ├── VendorPublishCommand.php
│   │   │   │       │   │   ├── ViewCacheCommand.php
│   │   │   │       │   │   ├── ViewClearCommand.php
│   │   │   │       │   │   └── ViewMakeCommand.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── DiagnosingHealth.php
│   │   │   │       │   │   ├── DiscoverEvents.php
│   │   │   │       │   │   ├── Dispatchable.php
│   │   │   │       │   │   ├── LocaleUpdated.php
│   │   │   │       │   │   ├── MaintenanceModeDisabled.php
│   │   │   │       │   │   ├── MaintenanceModeEnabled.php
│   │   │   │       │   │   ├── PublishingStubs.php
│   │   │   │       │   │   ├── Terminating.php
│   │   │   │       │   │   └── VendorTagPublished.php
│   │   │   │       │   ├── Exceptions
│   │   │   │       │   │   ├── Renderer
│   │   │   │       │   │   │   ├── Mappers
│   │   │   │       │   │   │   │   └── BladeMapper.php
│   │   │   │       │   │   │   ├── Exception.php
│   │   │   │       │   │   │   ├── Frame.php
│   │   │   │       │   │   │   ├── Listener.php
│   │   │   │       │   │   │   └── Renderer.php
│   │   │   │       │   │   ├── views
│   │   │   │       │   │   │   ├── 401.blade.php
│   │   │   │       │   │   │   ├── 402.blade.php
│   │   │   │       │   │   │   ├── 403.blade.php
│   │   │   │       │   │   │   ├── 404.blade.php
│   │   │   │       │   │   │   ├── 419.blade.php
│   │   │   │       │   │   │   ├── 429.blade.php
│   │   │   │       │   │   │   ├── 500.blade.php
│   │   │   │       │   │   │   ├── 503.blade.php
│   │   │   │       │   │   │   ├── layout.blade.php
│   │   │   │       │   │   │   └── minimal.blade.php
│   │   │   │       │   │   ├── Whoops
│   │   │   │       │   │   │   ├── WhoopsExceptionRenderer.php
│   │   │   │       │   │   │   └── WhoopsHandler.php
│   │   │   │       │   │   ├── Handler.php
│   │   │   │       │   │   ├── RegisterErrorViewPaths.php
│   │   │   │       │   │   └── ReportableHandler.php
│   │   │   │       │   ├── Http
│   │   │   │       │   │   ├── Events
│   │   │   │       │   │   │   └── RequestHandled.php
│   │   │   │       │   │   ├── Middleware
│   │   │   │       │   │   │   ├── Concerns
│   │   │   │       │   │   │   │   └── ExcludesPaths.php
│   │   │   │       │   │   │   ├── CheckForMaintenanceMode.php
│   │   │   │       │   │   │   ├── ConvertEmptyStringsToNull.php
│   │   │   │       │   │   │   ├── HandlePrecognitiveRequests.php
│   │   │   │       │   │   │   ├── InvokeDeferredCallbacks.php
│   │   │   │       │   │   │   ├── PreventRequestsDuringMaintenance.php
│   │   │   │       │   │   │   ├── TransformsRequest.php
│   │   │   │       │   │   │   ├── TrimStrings.php
│   │   │   │       │   │   │   ├── ValidateCsrfToken.php
│   │   │   │       │   │   │   ├── ValidatePostSize.php
│   │   │   │       │   │   │   └── VerifyCsrfToken.php
│   │   │   │       │   │   ├── FormRequest.php
│   │   │   │       │   │   ├── HtmlDumper.php
│   │   │   │       │   │   ├── Kernel.php
│   │   │   │       │   │   └── MaintenanceModeBypassCookie.php
│   │   │   │       │   ├── Providers
│   │   │   │       │   │   ├── ArtisanServiceProvider.php
│   │   │   │       │   │   ├── ComposerServiceProvider.php
│   │   │   │       │   │   ├── ConsoleSupportServiceProvider.php
│   │   │   │       │   │   ├── FormRequestServiceProvider.php
│   │   │   │       │   │   └── FoundationServiceProvider.php
│   │   │   │       │   ├── Queue
│   │   │   │       │   │   ├── InteractsWithUniqueJobs.php
│   │   │   │       │   │   └── Queueable.php
│   │   │   │       │   ├── resources
│   │   │   │       │   │   ├── exceptions
│   │   │   │       │   │   │   └── renderer
│   │   │   │       │   │   │       ├── components
│   │   │   │       │   │   │       │   ├── icons
│   │   │   │       │   │   │       │   │   ├── chevron-down.blade.php
│   │   │   │       │   │   │       │   │   ├── chevron-up.blade.php
│   │   │   │       │   │   │       │   │   ├── computer-desktop.blade.php
│   │   │   │       │   │   │       │   │   ├── moon.blade.php
│   │   │   │       │   │   │       │   │   └── sun.blade.php
│   │   │   │       │   │   │       │   ├── card.blade.php
│   │   │   │       │   │   │       │   ├── context.blade.php
│   │   │   │       │   │   │       │   ├── editor.blade.php
│   │   │   │       │   │   │       │   ├── header.blade.php
│   │   │   │       │   │   │       │   ├── layout.blade.php
│   │   │   │       │   │   │       │   ├── navigation.blade.php
│   │   │   │       │   │   │       │   ├── theme-switcher.blade.php
│   │   │   │       │   │   │       │   ├── trace-and-editor.blade.php
│   │   │   │       │   │   │       │   └── trace.blade.php
│   │   │   │       │   │   │       ├── dark-mode.css
│   │   │   │       │   │   │       ├── light-mode.css
│   │   │   │       │   │   │       ├── package-lock.json
│   │   │   │       │   │   │       ├── package.json
│   │   │   │       │   │   │       ├── postcss.config.js
│   │   │   │       │   │   │       ├── scripts.js
│   │   │   │       │   │   │       ├── show.blade.php
│   │   │   │       │   │   │       ├── styles.css
│   │   │   │       │   │   │       ├── tailwind.config.js
│   │   │   │       │   │   │       └── vite.config.js
│   │   │   │       │   │   ├── health-up.blade.php
│   │   │   │       │   │   └── server.php
│   │   │   │       │   ├── Routing
│   │   │   │       │   │   ├── PrecognitionCallableDispatcher.php
│   │   │   │       │   │   └── PrecognitionControllerDispatcher.php
│   │   │   │       │   ├── stubs
│   │   │   │       │   │   └── facade.stub
│   │   │   │       │   ├── Support
│   │   │   │       │   │   └── Providers
│   │   │   │       │   │       ├── AuthServiceProvider.php
│   │   │   │       │   │       ├── EventServiceProvider.php
│   │   │   │       │   │       └── RouteServiceProvider.php
│   │   │   │       │   ├── Testing
│   │   │   │       │   │   ├── Concerns
│   │   │   │       │   │   │   ├── InteractsWithAuthentication.php
│   │   │   │       │   │   │   ├── InteractsWithConsole.php
│   │   │   │       │   │   │   ├── InteractsWithContainer.php
│   │   │   │       │   │   │   ├── InteractsWithDatabase.php
│   │   │   │       │   │   │   ├── InteractsWithDeprecationHandling.php
│   │   │   │       │   │   │   ├── InteractsWithExceptionHandling.php
│   │   │   │       │   │   │   ├── InteractsWithRedis.php
│   │   │   │       │   │   │   ├── InteractsWithSession.php
│   │   │   │       │   │   │   ├── InteractsWithTestCaseLifecycle.php
│   │   │   │       │   │   │   ├── InteractsWithTime.php
│   │   │   │       │   │   │   ├── InteractsWithViews.php
│   │   │   │       │   │   │   ├── MakesHttpRequests.php
│   │   │   │       │   │   │   └── WithoutExceptionHandlingHandler.php
│   │   │   │       │   │   ├── Traits
│   │   │   │       │   │   │   └── CanConfigureMigrationCommands.php
│   │   │   │       │   │   ├── DatabaseMigrations.php
│   │   │   │       │   │   ├── DatabaseTransactions.php
│   │   │   │       │   │   ├── DatabaseTransactionsManager.php
│   │   │   │       │   │   ├── DatabaseTruncation.php
│   │   │   │       │   │   ├── LazilyRefreshDatabase.php
│   │   │   │       │   │   ├── RefreshDatabase.php
│   │   │   │       │   │   ├── RefreshDatabaseState.php
│   │   │   │       │   │   ├── TestCase.php
│   │   │   │       │   │   ├── WithConsoleEvents.php
│   │   │   │       │   │   ├── WithFaker.php
│   │   │   │       │   │   ├── WithoutMiddleware.php
│   │   │   │       │   │   └── Wormhole.php
│   │   │   │       │   ├── Validation
│   │   │   │       │   │   └── ValidatesRequests.php
│   │   │   │       │   ├── AliasLoader.php
│   │   │   │       │   ├── Application.php
│   │   │   │       │   ├── CacheBasedMaintenanceMode.php
│   │   │   │       │   ├── Cloud.php
│   │   │   │       │   ├── ComposerScripts.php
│   │   │   │       │   ├── EnvironmentDetector.php
│   │   │   │       │   ├── FileBasedMaintenanceMode.php
│   │   │   │       │   ├── helpers.php
│   │   │   │       │   ├── Inspiring.php
│   │   │   │       │   ├── MaintenanceModeManager.php
│   │   │   │       │   ├── Mix.php
│   │   │   │       │   ├── MixFileNotFoundException.php
│   │   │   │       │   ├── MixManifestNotFoundException.php
│   │   │   │       │   ├── PackageManifest.php
│   │   │   │       │   ├── Precognition.php
│   │   │   │       │   ├── ProviderRepository.php
│   │   │   │       │   ├── Vite.php
│   │   │   │       │   ├── ViteException.php
│   │   │   │       │   └── ViteManifestNotFoundException.php
│   │   │   │       ├── Hashing
│   │   │   │       │   ├── AbstractHasher.php
│   │   │   │       │   ├── Argon2IdHasher.php
│   │   │   │       │   ├── ArgonHasher.php
│   │   │   │       │   ├── BcryptHasher.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── HashManager.php
│   │   │   │       │   ├── HashServiceProvider.php
│   │   │   │       │   └── LICENSE.md
│   │   │   │       ├── Http
│   │   │   │       │   ├── Client
│   │   │   │       │   │   ├── Concerns
│   │   │   │       │   │   │   └── DeterminesStatusCode.php
│   │   │   │       │   │   ├── Events
│   │   │   │       │   │   │   ├── ConnectionFailed.php
│   │   │   │       │   │   │   ├── RequestSending.php
│   │   │   │       │   │   │   └── ResponseReceived.php
│   │   │   │       │   │   ├── ConnectionException.php
│   │   │   │       │   │   ├── Factory.php
│   │   │   │       │   │   ├── HttpClientException.php
│   │   │   │       │   │   ├── PendingRequest.php
│   │   │   │       │   │   ├── Pool.php
│   │   │   │       │   │   ├── Request.php
│   │   │   │       │   │   ├── RequestException.php
│   │   │   │       │   │   ├── Response.php
│   │   │   │       │   │   └── ResponseSequence.php
│   │   │   │       │   ├── Concerns
│   │   │   │       │   │   ├── CanBePrecognitive.php
│   │   │   │       │   │   ├── InteractsWithContentTypes.php
│   │   │   │       │   │   ├── InteractsWithFlashData.php
│   │   │   │       │   │   └── InteractsWithInput.php
│   │   │   │       │   ├── Exceptions
│   │   │   │       │   │   ├── HttpResponseException.php
│   │   │   │       │   │   ├── MalformedUrlException.php
│   │   │   │       │   │   ├── PostTooLargeException.php
│   │   │   │       │   │   └── ThrottleRequestsException.php
│   │   │   │       │   ├── Middleware
│   │   │   │       │   │   ├── AddLinkHeadersForPreloadedAssets.php
│   │   │   │       │   │   ├── CheckResponseForModifications.php
│   │   │   │       │   │   ├── FrameGuard.php
│   │   │   │       │   │   ├── HandleCors.php
│   │   │   │       │   │   ├── SetCacheHeaders.php
│   │   │   │       │   │   ├── TrustHosts.php
│   │   │   │       │   │   ├── TrustProxies.php
│   │   │   │       │   │   ├── ValidatePathEncoding.php
│   │   │   │       │   │   └── ValidatePostSize.php
│   │   │   │       │   ├── Resources
│   │   │   │       │   │   ├── Json
│   │   │   │       │   │   │   ├── AnonymousResourceCollection.php
│   │   │   │       │   │   │   ├── JsonResource.php
│   │   │   │       │   │   │   ├── PaginatedResourceResponse.php
│   │   │   │       │   │   │   ├── ResourceCollection.php
│   │   │   │       │   │   │   └── ResourceResponse.php
│   │   │   │       │   │   ├── CollectsResources.php
│   │   │   │       │   │   ├── ConditionallyLoadsAttributes.php
│   │   │   │       │   │   ├── DelegatesToResource.php
│   │   │   │       │   │   ├── MergeValue.php
│   │   │   │       │   │   ├── MissingValue.php
│   │   │   │       │   │   └── PotentiallyMissing.php
│   │   │   │       │   ├── Testing
│   │   │   │       │   │   ├── File.php
│   │   │   │       │   │   ├── FileFactory.php
│   │   │   │       │   │   └── MimeType.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── File.php
│   │   │   │       │   ├── FileHelpers.php
│   │   │   │       │   ├── JsonResponse.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── RedirectResponse.php
│   │   │   │       │   ├── Request.php
│   │   │   │       │   ├── Response.php
│   │   │   │       │   ├── ResponseTrait.php
│   │   │   │       │   ├── StreamedEvent.php
│   │   │   │       │   └── UploadedFile.php
│   │   │   │       ├── Log
│   │   │   │       │   ├── Context
│   │   │   │       │   │   ├── Events
│   │   │   │       │   │   │   ├── ContextDehydrating.php
│   │   │   │       │   │   │   └── ContextHydrated.php
│   │   │   │       │   │   ├── ContextLogProcessor.php
│   │   │   │       │   │   ├── ContextServiceProvider.php
│   │   │   │       │   │   └── Repository.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   └── MessageLogged.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── functions.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Logger.php
│   │   │   │       │   ├── LogManager.php
│   │   │   │       │   ├── LogServiceProvider.php
│   │   │   │       │   └── ParsesLogConfiguration.php
│   │   │   │       ├── Macroable
│   │   │   │       │   ├── Traits
│   │   │   │       │   │   └── Macroable.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   └── LICENSE.md
│   │   │   │       ├── Mail
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── MessageSending.php
│   │   │   │       │   │   └── MessageSent.php
│   │   │   │       │   ├── Mailables
│   │   │   │       │   │   ├── Address.php
│   │   │   │       │   │   ├── Attachment.php
│   │   │   │       │   │   ├── Content.php
│   │   │   │       │   │   ├── Envelope.php
│   │   │   │       │   │   └── Headers.php
│   │   │   │       │   ├── resources
│   │   │   │       │   │   └── views
│   │   │   │       │   │       ├── html
│   │   │   │       │   │       │   ├── themes
│   │   │   │       │   │       │   │   └── default.css
│   │   │   │       │   │       │   ├── button.blade.php
│   │   │   │       │   │       │   ├── footer.blade.php
│   │   │   │       │   │       │   ├── header.blade.php
│   │   │   │       │   │       │   ├── layout.blade.php
│   │   │   │       │   │       │   ├── message.blade.php
│   │   │   │       │   │       │   ├── panel.blade.php
│   │   │   │       │   │       │   ├── subcopy.blade.php
│   │   │   │       │   │       │   └── table.blade.php
│   │   │   │       │   │       └── text
│   │   │   │       │   │           ├── button.blade.php
│   │   │   │       │   │           ├── footer.blade.php
│   │   │   │       │   │           ├── header.blade.php
│   │   │   │       │   │           ├── layout.blade.php
│   │   │   │       │   │           ├── message.blade.php
│   │   │   │       │   │           ├── panel.blade.php
│   │   │   │       │   │           ├── subcopy.blade.php
│   │   │   │       │   │           └── table.blade.php
│   │   │   │       │   ├── Transport
│   │   │   │       │   │   ├── ArrayTransport.php
│   │   │   │       │   │   ├── LogTransport.php
│   │   │   │       │   │   ├── ResendTransport.php
│   │   │   │       │   │   ├── SesTransport.php
│   │   │   │       │   │   └── SesV2Transport.php
│   │   │   │       │   ├── Attachment.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Mailable.php
│   │   │   │       │   ├── Mailer.php
│   │   │   │       │   ├── MailManager.php
│   │   │   │       │   ├── MailServiceProvider.php
│   │   │   │       │   ├── Markdown.php
│   │   │   │       │   ├── Message.php
│   │   │   │       │   ├── PendingMail.php
│   │   │   │       │   ├── SendQueuedMailable.php
│   │   │   │       │   ├── SentMessage.php
│   │   │   │       │   └── TextMessage.php
│   │   │   │       ├── Notifications
│   │   │   │       │   ├── Channels
│   │   │   │       │   │   ├── BroadcastChannel.php
│   │   │   │       │   │   ├── DatabaseChannel.php
│   │   │   │       │   │   └── MailChannel.php
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   └── notifications.stub
│   │   │   │       │   │   └── NotificationTableCommand.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── BroadcastNotificationCreated.php
│   │   │   │       │   │   ├── NotificationFailed.php
│   │   │   │       │   │   ├── NotificationSending.php
│   │   │   │       │   │   └── NotificationSent.php
│   │   │   │       │   ├── Messages
│   │   │   │       │   │   ├── BroadcastMessage.php
│   │   │   │       │   │   ├── DatabaseMessage.php
│   │   │   │       │   │   ├── MailMessage.php
│   │   │   │       │   │   └── SimpleMessage.php
│   │   │   │       │   ├── resources
│   │   │   │       │   │   └── views
│   │   │   │       │   │       └── email.blade.php
│   │   │   │       │   ├── Action.php
│   │   │   │       │   ├── AnonymousNotifiable.php
│   │   │   │       │   ├── ChannelManager.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── DatabaseNotification.php
│   │   │   │       │   ├── DatabaseNotificationCollection.php
│   │   │   │       │   ├── HasDatabaseNotifications.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Notifiable.php
│   │   │   │       │   ├── Notification.php
│   │   │   │       │   ├── NotificationSender.php
│   │   │   │       │   ├── NotificationServiceProvider.php
│   │   │   │       │   ├── RoutesNotifications.php
│   │   │   │       │   └── SendQueuedNotifications.php
│   │   │   │       ├── Pagination
│   │   │   │       │   ├── resources
│   │   │   │       │   │   └── views
│   │   │   │       │   │       ├── bootstrap-4.blade.php
│   │   │   │       │   │       ├── bootstrap-5.blade.php
│   │   │   │       │   │       ├── default.blade.php
│   │   │   │       │   │       ├── semantic-ui.blade.php
│   │   │   │       │   │       ├── simple-bootstrap-4.blade.php
│   │   │   │       │   │       ├── simple-bootstrap-5.blade.php
│   │   │   │       │   │       ├── simple-default.blade.php
│   │   │   │       │   │       ├── simple-tailwind.blade.php
│   │   │   │       │   │       └── tailwind.blade.php
│   │   │   │       │   ├── AbstractCursorPaginator.php
│   │   │   │       │   ├── AbstractPaginator.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Cursor.php
│   │   │   │       │   ├── CursorPaginator.php
│   │   │   │       │   ├── LengthAwarePaginator.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── PaginationServiceProvider.php
│   │   │   │       │   ├── PaginationState.php
│   │   │   │       │   ├── Paginator.php
│   │   │   │       │   └── UrlWindow.php
│   │   │   │       ├── Pipeline
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Hub.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Pipeline.php
│   │   │   │       │   └── PipelineServiceProvider.php
│   │   │   │       ├── Process
│   │   │   │       │   ├── Exceptions
│   │   │   │       │   │   ├── ProcessFailedException.php
│   │   │   │       │   │   └── ProcessTimedOutException.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Factory.php
│   │   │   │       │   ├── FakeInvokedProcess.php
│   │   │   │       │   ├── FakeProcessDescription.php
│   │   │   │       │   ├── FakeProcessResult.php
│   │   │   │       │   ├── FakeProcessSequence.php
│   │   │   │       │   ├── InvokedProcess.php
│   │   │   │       │   ├── InvokedProcessPool.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── PendingProcess.php
│   │   │   │       │   ├── Pipe.php
│   │   │   │       │   ├── Pool.php
│   │   │   │       │   ├── ProcessPoolResults.php
│   │   │   │       │   └── ProcessResult.php
│   │   │   │       ├── Queue
│   │   │   │       │   ├── Attributes
│   │   │   │       │   │   ├── DeleteWhenMissingModels.php
│   │   │   │       │   │   └── WithoutRelations.php
│   │   │   │       │   ├── Capsule
│   │   │   │       │   │   └── Manager.php
│   │   │   │       │   ├── Connectors
│   │   │   │       │   │   ├── BeanstalkdConnector.php
│   │   │   │       │   │   ├── ConnectorInterface.php
│   │   │   │       │   │   ├── DatabaseConnector.php
│   │   │   │       │   │   ├── NullConnector.php
│   │   │   │       │   │   ├── RedisConnector.php
│   │   │   │       │   │   ├── SqsConnector.php
│   │   │   │       │   │   └── SyncConnector.php
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   ├── batches.stub
│   │   │   │       │   │   │   ├── failed_jobs.stub
│   │   │   │       │   │   │   └── jobs.stub
│   │   │   │       │   │   ├── BatchesTableCommand.php
│   │   │   │       │   │   ├── ClearCommand.php
│   │   │   │       │   │   ├── FailedTableCommand.php
│   │   │   │       │   │   ├── FlushFailedCommand.php
│   │   │   │       │   │   ├── ForgetFailedCommand.php
│   │   │   │       │   │   ├── ListenCommand.php
│   │   │   │       │   │   ├── ListFailedCommand.php
│   │   │   │       │   │   ├── MonitorCommand.php
│   │   │   │       │   │   ├── PruneBatchesCommand.php
│   │   │   │       │   │   ├── PruneFailedJobsCommand.php
│   │   │   │       │   │   ├── RestartCommand.php
│   │   │   │       │   │   ├── RetryBatchCommand.php
│   │   │   │       │   │   ├── RetryCommand.php
│   │   │   │       │   │   ├── TableCommand.php
│   │   │   │       │   │   └── WorkCommand.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── JobAttempted.php
│   │   │   │       │   │   ├── JobExceptionOccurred.php
│   │   │   │       │   │   ├── JobFailed.php
│   │   │   │       │   │   ├── JobPopped.php
│   │   │   │       │   │   ├── JobPopping.php
│   │   │   │       │   │   ├── JobProcessed.php
│   │   │   │       │   │   ├── JobProcessing.php
│   │   │   │       │   │   ├── JobQueued.php
│   │   │   │       │   │   ├── JobQueueing.php
│   │   │   │       │   │   ├── JobReleasedAfterException.php
│   │   │   │       │   │   ├── JobRetryRequested.php
│   │   │   │       │   │   ├── JobTimedOut.php
│   │   │   │       │   │   ├── Looping.php
│   │   │   │       │   │   ├── QueueBusy.php
│   │   │   │       │   │   └── WorkerStopping.php
│   │   │   │       │   ├── Failed
│   │   │   │       │   │   ├── CountableFailedJobProvider.php
│   │   │   │       │   │   ├── DatabaseFailedJobProvider.php
│   │   │   │       │   │   ├── DatabaseUuidFailedJobProvider.php
│   │   │   │       │   │   ├── DynamoDbFailedJobProvider.php
│   │   │   │       │   │   ├── FailedJobProviderInterface.php
│   │   │   │       │   │   ├── FileFailedJobProvider.php
│   │   │   │       │   │   ├── NullFailedJobProvider.php
│   │   │   │       │   │   └── PrunableFailedJobProvider.php
│   │   │   │       │   ├── Jobs
│   │   │   │       │   │   ├── BeanstalkdJob.php
│   │   │   │       │   │   ├── DatabaseJob.php
│   │   │   │       │   │   ├── DatabaseJobRecord.php
│   │   │   │       │   │   ├── FakeJob.php
│   │   │   │       │   │   ├── Job.php
│   │   │   │       │   │   ├── JobName.php
│   │   │   │       │   │   ├── RedisJob.php
│   │   │   │       │   │   ├── SqsJob.php
│   │   │   │       │   │   └── SyncJob.php
│   │   │   │       │   ├── Middleware
│   │   │   │       │   │   ├── RateLimited.php
│   │   │   │       │   │   ├── RateLimitedWithRedis.php
│   │   │   │       │   │   ├── Skip.php
│   │   │   │       │   │   ├── SkipIfBatchCancelled.php
│   │   │   │       │   │   ├── ThrottlesExceptions.php
│   │   │   │       │   │   ├── ThrottlesExceptionsWithRedis.php
│   │   │   │       │   │   └── WithoutOverlapping.php
│   │   │   │       │   ├── BeanstalkdQueue.php
│   │   │   │       │   ├── CallQueuedClosure.php
│   │   │   │       │   ├── CallQueuedHandler.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── DatabaseQueue.php
│   │   │   │       │   ├── InteractsWithQueue.php
│   │   │   │       │   ├── InvalidPayloadException.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Listener.php
│   │   │   │       │   ├── ListenerOptions.php
│   │   │   │       │   ├── LuaScripts.php
│   │   │   │       │   ├── ManuallyFailedException.php
│   │   │   │       │   ├── MaxAttemptsExceededException.php
│   │   │   │       │   ├── NullQueue.php
│   │   │   │       │   ├── Queue.php
│   │   │   │       │   ├── QueueManager.php
│   │   │   │       │   ├── QueueServiceProvider.php
│   │   │   │       │   ├── README.md
│   │   │   │       │   ├── RedisQueue.php
│   │   │   │       │   ├── SerializesAndRestoresModelIdentifiers.php
│   │   │   │       │   ├── SerializesModels.php
│   │   │   │       │   ├── SqsQueue.php
│   │   │   │       │   ├── SyncQueue.php
│   │   │   │       │   ├── TimeoutExceededException.php
│   │   │   │       │   ├── Worker.php
│   │   │   │       │   └── WorkerOptions.php
│   │   │   │       ├── Redis
│   │   │   │       │   ├── Connections
│   │   │   │       │   │   ├── Connection.php
│   │   │   │       │   │   ├── PacksPhpRedisValues.php
│   │   │   │       │   │   ├── PhpRedisClusterConnection.php
│   │   │   │       │   │   ├── PhpRedisConnection.php
│   │   │   │       │   │   ├── PredisClusterConnection.php
│   │   │   │       │   │   └── PredisConnection.php
│   │   │   │       │   ├── Connectors
│   │   │   │       │   │   ├── PhpRedisConnector.php
│   │   │   │       │   │   └── PredisConnector.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   └── CommandExecuted.php
│   │   │   │       │   ├── Limiters
│   │   │   │       │   │   ├── ConcurrencyLimiter.php
│   │   │   │       │   │   ├── ConcurrencyLimiterBuilder.php
│   │   │   │       │   │   ├── DurationLimiter.php
│   │   │   │       │   │   └── DurationLimiterBuilder.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── RedisManager.php
│   │   │   │       │   └── RedisServiceProvider.php
│   │   │   │       ├── Routing
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   ├── controller.api.stub
│   │   │   │       │   │   │   ├── controller.invokable.stub
│   │   │   │       │   │   │   ├── controller.model.api.stub
│   │   │   │       │   │   │   ├── controller.model.stub
│   │   │   │       │   │   │   ├── controller.nested.api.stub
│   │   │   │       │   │   │   ├── controller.nested.singleton.api.stub
│   │   │   │       │   │   │   ├── controller.nested.singleton.stub
│   │   │   │       │   │   │   ├── controller.nested.stub
│   │   │   │       │   │   │   ├── controller.plain.stub
│   │   │   │       │   │   │   ├── controller.singleton.api.stub
│   │   │   │       │   │   │   ├── controller.singleton.stub
│   │   │   │       │   │   │   ├── controller.stub
│   │   │   │       │   │   │   └── middleware.stub
│   │   │   │       │   │   ├── ControllerMakeCommand.php
│   │   │   │       │   │   └── MiddlewareMakeCommand.php
│   │   │   │       │   ├── Contracts
│   │   │   │       │   │   ├── CallableDispatcher.php
│   │   │   │       │   │   └── ControllerDispatcher.php
│   │   │   │       │   ├── Controllers
│   │   │   │       │   │   ├── HasMiddleware.php
│   │   │   │       │   │   └── Middleware.php
│   │   │   │       │   ├── Events
│   │   │   │       │   │   ├── PreparingResponse.php
│   │   │   │       │   │   ├── ResponsePrepared.php
│   │   │   │       │   │   ├── RouteMatched.php
│   │   │   │       │   │   └── Routing.php
│   │   │   │       │   ├── Exceptions
│   │   │   │       │   │   ├── BackedEnumCaseNotFoundException.php
│   │   │   │       │   │   ├── InvalidSignatureException.php
│   │   │   │       │   │   ├── MissingRateLimiterException.php
│   │   │   │       │   │   ├── StreamedResponseException.php
│   │   │   │       │   │   └── UrlGenerationException.php
│   │   │   │       │   ├── Matching
│   │   │   │       │   │   ├── HostValidator.php
│   │   │   │       │   │   ├── MethodValidator.php
│   │   │   │       │   │   ├── SchemeValidator.php
│   │   │   │       │   │   ├── UriValidator.php
│   │   │   │       │   │   └── ValidatorInterface.php
│   │   │   │       │   ├── Middleware
│   │   │   │       │   │   ├── SubstituteBindings.php
│   │   │   │       │   │   ├── ThrottleRequests.php
│   │   │   │       │   │   ├── ThrottleRequestsWithRedis.php
│   │   │   │       │   │   └── ValidateSignature.php
│   │   │   │       │   ├── AbstractRouteCollection.php
│   │   │   │       │   ├── CallableDispatcher.php
│   │   │   │       │   ├── CompiledRouteCollection.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Controller.php
│   │   │   │       │   ├── ControllerDispatcher.php
│   │   │   │       │   ├── ControllerMiddlewareOptions.php
│   │   │   │       │   ├── CreatesRegularExpressionRouteConstraints.php
│   │   │   │       │   ├── FiltersControllerMiddleware.php
│   │   │   │       │   ├── ImplicitRouteBinding.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── MiddlewareNameResolver.php
│   │   │   │       │   ├── PendingResourceRegistration.php
│   │   │   │       │   ├── PendingSingletonResourceRegistration.php
│   │   │   │       │   ├── Pipeline.php
│   │   │   │       │   ├── RedirectController.php
│   │   │   │       │   ├── Redirector.php
│   │   │   │       │   ├── ResolvesRouteDependencies.php
│   │   │   │       │   ├── ResourceRegistrar.php
│   │   │   │       │   ├── ResponseFactory.php
│   │   │   │       │   ├── Route.php
│   │   │   │       │   ├── RouteAction.php
│   │   │   │       │   ├── RouteBinding.php
│   │   │   │       │   ├── RouteCollection.php
│   │   │   │       │   ├── RouteCollectionInterface.php
│   │   │   │       │   ├── RouteDependencyResolverTrait.php
│   │   │   │       │   ├── RouteFileRegistrar.php
│   │   │   │       │   ├── RouteGroup.php
│   │   │   │       │   ├── RouteParameterBinder.php
│   │   │   │       │   ├── Router.php
│   │   │   │       │   ├── RouteRegistrar.php
│   │   │   │       │   ├── RouteSignatureParameters.php
│   │   │   │       │   ├── RouteUri.php
│   │   │   │       │   ├── RouteUrlGenerator.php
│   │   │   │       │   ├── RoutingServiceProvider.php
│   │   │   │       │   ├── SortedMiddleware.php
│   │   │   │       │   ├── UrlGenerator.php
│   │   │   │       │   └── ViewController.php
│   │   │   │       ├── Session
│   │   │   │       │   ├── Console
│   │   │   │       │   │   ├── stubs
│   │   │   │       │   │   │   └── database.stub
│   │   │   │       │   │   └── SessionTableCommand.php
│   │   │   │       │   ├── Middleware
│   │   │   │       │   │   ├── AuthenticateSession.php
│   │   │   │       │   │   └── StartSession.php
│   │   │   │       │   ├── ArraySessionHandler.php
│   │   │   │       │   ├── CacheBasedSessionHandler.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── CookieSessionHandler.php
│   │   │   │       │   ├── DatabaseSessionHandler.php
│   │   │   │       │   ├── EncryptedStore.php
│   │   │   │       │   ├── ExistenceAwareInterface.php
│   │   │   │       │   ├── FileSessionHandler.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── NullSessionHandler.php
│   │   │   │       │   ├── SessionManager.php
│   │   │   │       │   ├── SessionServiceProvider.php
│   │   │   │       │   ├── Store.php
│   │   │   │       │   ├── SymfonySessionDecorator.php
│   │   │   │       │   └── TokenMismatchException.php
│   │   │   │       ├── Support
│   │   │   │       │   ├── Defer
│   │   │   │       │   │   ├── DeferredCallback.php
│   │   │   │       │   │   └── DeferredCallbackCollection.php
│   │   │   │       │   ├── Exceptions
│   │   │   │       │   │   └── MathException.php
│   │   │   │       │   ├── Facades
│   │   │   │       │   │   ├── App.php
│   │   │   │       │   │   ├── Artisan.php
│   │   │   │       │   │   ├── Auth.php
│   │   │   │       │   │   ├── Blade.php
│   │   │   │       │   │   ├── Broadcast.php
│   │   │   │       │   │   ├── Bus.php
│   │   │   │       │   │   ├── Cache.php
│   │   │   │       │   │   ├── Concurrency.php
│   │   │   │       │   │   ├── Config.php
│   │   │   │       │   │   ├── Context.php
│   │   │   │       │   │   ├── Cookie.php
│   │   │   │       │   │   ├── Crypt.php
│   │   │   │       │   │   ├── Date.php
│   │   │   │       │   │   ├── DB.php
│   │   │   │       │   │   ├── Event.php
│   │   │   │       │   │   ├── Exceptions.php
│   │   │   │       │   │   ├── Facade.php
│   │   │   │       │   │   ├── File.php
│   │   │   │       │   │   ├── Gate.php
│   │   │   │       │   │   ├── Hash.php
│   │   │   │       │   │   ├── Http.php
│   │   │   │       │   │   ├── Lang.php
│   │   │   │       │   │   ├── Log.php
│   │   │   │       │   │   ├── Mail.php
│   │   │   │       │   │   ├── Notification.php
│   │   │   │       │   │   ├── ParallelTesting.php
│   │   │   │       │   │   ├── Password.php
│   │   │   │       │   │   ├── Pipeline.php
│   │   │   │       │   │   ├── Process.php
│   │   │   │       │   │   ├── Queue.php
│   │   │   │       │   │   ├── RateLimiter.php
│   │   │   │       │   │   ├── Redirect.php
│   │   │   │       │   │   ├── Redis.php
│   │   │   │       │   │   ├── Request.php
│   │   │   │       │   │   ├── Response.php
│   │   │   │       │   │   ├── Route.php
│   │   │   │       │   │   ├── Schedule.php
│   │   │   │       │   │   ├── Schema.php
│   │   │   │       │   │   ├── Session.php
│   │   │   │       │   │   ├── Storage.php
│   │   │   │       │   │   ├── URL.php
│   │   │   │       │   │   ├── Validator.php
│   │   │   │       │   │   ├── View.php
│   │   │   │       │   │   └── Vite.php
│   │   │   │       │   ├── Testing
│   │   │   │       │   │   └── Fakes
│   │   │   │       │   │       ├── BatchFake.php
│   │   │   │       │   │       ├── BatchRepositoryFake.php
│   │   │   │       │   │       ├── BusFake.php
│   │   │   │       │   │       ├── ChainedBatchTruthTest.php
│   │   │   │       │   │       ├── EventFake.php
│   │   │   │       │   │       ├── ExceptionHandlerFake.php
│   │   │   │       │   │       ├── Fake.php
│   │   │   │       │   │       ├── MailFake.php
│   │   │   │       │   │       ├── NotificationFake.php
│   │   │   │       │   │       ├── PendingBatchFake.php
│   │   │   │       │   │       ├── PendingChainFake.php
│   │   │   │       │   │       ├── PendingMailFake.php
│   │   │   │       │   │       └── QueueFake.php
│   │   │   │       │   ├── Traits
│   │   │   │       │   │   ├── CapsuleManagerTrait.php
│   │   │   │       │   │   ├── Dumpable.php
│   │   │   │       │   │   ├── ForwardsCalls.php
│   │   │   │       │   │   ├── InteractsWithData.php
│   │   │   │       │   │   ├── Localizable.php
│   │   │   │       │   │   ├── ReflectsClosures.php
│   │   │   │       │   │   └── Tappable.php
│   │   │   │       │   ├── AggregateServiceProvider.php
│   │   │   │       │   ├── Benchmark.php
│   │   │   │       │   ├── Carbon.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── Composer.php
│   │   │   │       │   ├── ConfigurationUrlParser.php
│   │   │   │       │   ├── DateFactory.php
│   │   │   │       │   ├── DefaultProviders.php
│   │   │   │       │   ├── Env.php
│   │   │   │       │   ├── Fluent.php
│   │   │   │       │   ├── functions.php
│   │   │   │       │   ├── helpers.php
│   │   │   │       │   ├── HigherOrderTapProxy.php
│   │   │   │       │   ├── HtmlString.php
│   │   │   │       │   ├── InteractsWithTime.php
│   │   │   │       │   ├── Js.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── Lottery.php
│   │   │   │       │   ├── Manager.php
│   │   │   │       │   ├── MessageBag.php
│   │   │   │       │   ├── MultipleInstanceManager.php
│   │   │   │       │   ├── NamespacedItemResolver.php
│   │   │   │       │   ├── Number.php
│   │   │   │       │   ├── Once.php
│   │   │   │       │   ├── Onceable.php
│   │   │   │       │   ├── Optional.php
│   │   │   │       │   ├── Pluralizer.php
│   │   │   │       │   ├── ProcessUtils.php
│   │   │   │       │   ├── Reflector.php
│   │   │   │       │   ├── ServiceProvider.php
│   │   │   │       │   ├── Sleep.php
│   │   │   │       │   ├── Str.php
│   │   │   │       │   ├── Stringable.php
│   │   │   │       │   ├── Timebox.php
│   │   │   │       │   ├── Uri.php
│   │   │   │       │   ├── UriQueryString.php
│   │   │   │       │   ├── ValidatedInput.php
│   │   │   │       │   └── ViewErrorBag.php
│   │   │   │       ├── Testing
│   │   │   │       │   ├── Concerns
│   │   │   │       │   │   ├── AssertsStatusCodes.php
│   │   │   │       │   │   ├── RunsInParallel.php
│   │   │   │       │   │   └── TestDatabases.php
│   │   │   │       │   ├── Constraints
│   │   │   │       │   │   ├── ArraySubset.php
│   │   │   │       │   │   ├── CountInDatabase.php
│   │   │   │       │   │   ├── HasInDatabase.php
│   │   │   │       │   │   ├── NotSoftDeletedInDatabase.php
│   │   │   │       │   │   ├── SeeInOrder.php
│   │   │   │       │   │   └── SoftDeletedInDatabase.php
│   │   │   │       │   ├── Exceptions
│   │   │   │       │   │   └── InvalidArgumentException.php
│   │   │   │       │   ├── Fluent
│   │   │   │       │   │   ├── Concerns
│   │   │   │       │   │   │   ├── Debugging.php
│   │   │   │       │   │   │   ├── Has.php
│   │   │   │       │   │   │   ├── Interaction.php
│   │   │   │       │   │   │   └── Matching.php
│   │   │   │       │   │   └── AssertableJson.php
│   │   │   │       │   ├── Assert.php
│   │   │   │       │   ├── AssertableJsonString.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── LoggedExceptionCollection.php
│   │   │   │       │   ├── ParallelConsoleOutput.php
│   │   │   │       │   ├── ParallelRunner.php
│   │   │   │       │   ├── ParallelTesting.php
│   │   │   │       │   ├── ParallelTestingServiceProvider.php
│   │   │   │       │   ├── PendingCommand.php
│   │   │   │       │   ├── TestComponent.php
│   │   │   │       │   ├── TestResponse.php
│   │   │   │       │   ├── TestResponseAssert.php
│   │   │   │       │   └── TestView.php
│   │   │   │       ├── Translation
│   │   │   │       │   ├── lang
│   │   │   │       │   │   └── en
│   │   │   │       │   │       ├── auth.php
│   │   │   │       │   │       ├── pagination.php
│   │   │   │       │   │       ├── passwords.php
│   │   │   │       │   │       └── validation.php
│   │   │   │       │   ├── ArrayLoader.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── CreatesPotentiallyTranslatedStrings.php
│   │   │   │       │   ├── FileLoader.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── MessageSelector.php
│   │   │   │       │   ├── PotentiallyTranslatedString.php
│   │   │   │       │   ├── TranslationServiceProvider.php
│   │   │   │       │   └── Translator.php
│   │   │   │       ├── Validation
│   │   │   │       │   ├── Concerns
│   │   │   │       │   │   ├── FilterEmailValidation.php
│   │   │   │       │   │   ├── FormatsMessages.php
│   │   │   │       │   │   ├── ReplacesAttributes.php
│   │   │   │       │   │   └── ValidatesAttributes.php
│   │   │   │       │   ├── Rules
│   │   │   │       │   │   ├── AnyOf.php
│   │   │   │       │   │   ├── ArrayRule.php
│   │   │   │       │   │   ├── Can.php
│   │   │   │       │   │   ├── DatabaseRule.php
│   │   │   │       │   │   ├── Date.php
│   │   │   │       │   │   ├── Dimensions.php
│   │   │   │       │   │   ├── Email.php
│   │   │   │       │   │   ├── Enum.php
│   │   │   │       │   │   ├── ExcludeIf.php
│   │   │   │       │   │   ├── Exists.php
│   │   │   │       │   │   ├── File.php
│   │   │   │       │   │   ├── ImageFile.php
│   │   │   │       │   │   ├── In.php
│   │   │   │       │   │   ├── NotIn.php
│   │   │   │       │   │   ├── Numeric.php
│   │   │   │       │   │   ├── Password.php
│   │   │   │       │   │   ├── ProhibitedIf.php
│   │   │   │       │   │   ├── RequiredIf.php
│   │   │   │       │   │   └── Unique.php
│   │   │   │       │   ├── ClosureValidationRule.php
│   │   │   │       │   ├── composer.json
│   │   │   │       │   ├── ConditionalRules.php
│   │   │   │       │   ├── DatabasePresenceVerifier.php
│   │   │   │       │   ├── DatabasePresenceVerifierInterface.php
│   │   │   │       │   ├── Factory.php
│   │   │   │       │   ├── InvokableValidationRule.php
│   │   │   │       │   ├── LICENSE.md
│   │   │   │       │   ├── NestedRules.php
│   │   │   │       │   ├── NotPwnedVerifier.php
│   │   │   │       │   ├── PresenceVerifierInterface.php
│   │   │   │       │   ├── Rule.php
│   │   │   │       │   ├── UnauthorizedException.php
│   │   │   │       │   ├── ValidatesWhenResolvedTrait.php
│   │   │   │       │   ├── ValidationData.php
│   │   │   │       │   ├── ValidationException.php
│   │   │   │       │   ├── ValidationRuleParser.php
│   │   │   │       │   ├── ValidationServiceProvider.php
│   │   │   │       │   └── Validator.php
│   │   │   │       └── View
│   │   │   │           ├── Compilers
│   │   │   │           │   ├── Concerns
│   │   │   │           │   │   ├── CompilesAuthorizations.php
│   │   │   │           │   │   ├── CompilesClasses.php
│   │   │   │           │   │   ├── CompilesComments.php
│   │   │   │           │   │   ├── CompilesComponents.php
│   │   │   │           │   │   ├── CompilesConditionals.php
│   │   │   │           │   │   ├── CompilesEchos.php
│   │   │   │           │   │   ├── CompilesErrors.php
│   │   │   │           │   │   ├── CompilesFragments.php
│   │   │   │           │   │   ├── CompilesHelpers.php
│   │   │   │           │   │   ├── CompilesIncludes.php
│   │   │   │           │   │   ├── CompilesInjections.php
│   │   │   │           │   │   ├── CompilesJs.php
│   │   │   │           │   │   ├── CompilesJson.php
│   │   │   │           │   │   ├── CompilesLayouts.php
│   │   │   │           │   │   ├── CompilesLoops.php
│   │   │   │           │   │   ├── CompilesRawPhp.php
│   │   │   │           │   │   ├── CompilesSessions.php
│   │   │   │           │   │   ├── CompilesStacks.php
│   │   │   │           │   │   ├── CompilesStyles.php
│   │   │   │           │   │   ├── CompilesTranslations.php
│   │   │   │           │   │   └── CompilesUseStatements.php
│   │   │   │           │   ├── BladeCompiler.php
│   │   │   │           │   ├── Compiler.php
│   │   │   │           │   ├── CompilerInterface.php
│   │   │   │           │   └── ComponentTagCompiler.php
│   │   │   │           ├── Concerns
│   │   │   │           │   ├── ManagesComponents.php
│   │   │   │           │   ├── ManagesEvents.php
│   │   │   │           │   ├── ManagesFragments.php
│   │   │   │           │   ├── ManagesLayouts.php
│   │   │   │           │   ├── ManagesLoops.php
│   │   │   │           │   ├── ManagesStacks.php
│   │   │   │           │   └── ManagesTranslations.php
│   │   │   │           ├── Engines
│   │   │   │           │   ├── CompilerEngine.php
│   │   │   │           │   ├── Engine.php
│   │   │   │           │   ├── EngineResolver.php
│   │   │   │           │   ├── FileEngine.php
│   │   │   │           │   └── PhpEngine.php
│   │   │   │           ├── Middleware
│   │   │   │           │   └── ShareErrorsFromSession.php
│   │   │   │           ├── AnonymousComponent.php
│   │   │   │           ├── AppendableAttributeValue.php
│   │   │   │           ├── Component.php
│   │   │   │           ├── ComponentAttributeBag.php
│   │   │   │           ├── ComponentSlot.php
│   │   │   │           ├── composer.json
│   │   │   │           ├── DynamicComponent.php
│   │   │   │           ├── Factory.php
│   │   │   │           ├── FileViewFinder.php
│   │   │   │           ├── InvokableComponentVariable.php
│   │   │   │           ├── LICENSE.md
│   │   │   │           ├── View.php
│   │   │   │           ├── ViewException.php
│   │   │   │           ├── ViewFinderInterface.php
│   │   │   │           ├── ViewName.php
│   │   │   │           └── ViewServiceProvider.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── pint.json
│   │   │   └── README.md
│   │   ├── pail
│   │   │   ├── src
│   │   │   │   ├── Console
│   │   │   │   │   └── Commands
│   │   │   │   │       └── PailCommand.php
│   │   │   │   ├── Contracts
│   │   │   │   │   └── Printer.php
│   │   │   │   ├── Guards
│   │   │   │   │   └── EnsurePcntlIsAvailable.php
│   │   │   │   ├── Printers
│   │   │   │   │   └── CliPrinter.php
│   │   │   │   ├── ValueObjects
│   │   │   │   │   ├── Origin
│   │   │   │   │   │   ├── Console.php
│   │   │   │   │   │   ├── Http.php
│   │   │   │   │   │   └── Queue.php
│   │   │   │   │   └── MessageLogged.php
│   │   │   │   ├── File.php
│   │   │   │   ├── Files.php
│   │   │   │   ├── Handler.php
│   │   │   │   ├── LoggerFactory.php
│   │   │   │   ├── Options.php
│   │   │   │   ├── PailServiceProvider.php
│   │   │   │   └── ProcessFactory.php
│   │   │   ├── composer.json
│   │   │   └── LICENSE.md
│   │   ├── pint
│   │   │   ├── builds
│   │   │   │   └── pint
│   │   │   ├── composer.json
│   │   │   └── LICENSE.md
│   │   ├── prompts
│   │   │   ├── src
│   │   │   │   ├── Concerns
│   │   │   │   │   ├── Colors.php
│   │   │   │   │   ├── Cursor.php
│   │   │   │   │   ├── Erase.php
│   │   │   │   │   ├── Events.php
│   │   │   │   │   ├── FakesInputOutput.php
│   │   │   │   │   ├── Fallback.php
│   │   │   │   │   ├── Interactivity.php
│   │   │   │   │   ├── Scrolling.php
│   │   │   │   │   ├── Termwind.php
│   │   │   │   │   ├── Themes.php
│   │   │   │   │   ├── Truncation.php
│   │   │   │   │   └── TypedValue.php
│   │   │   │   ├── Exceptions
│   │   │   │   │   ├── FormRevertedException.php
│   │   │   │   │   └── NonInteractiveValidationException.php
│   │   │   │   ├── Output
│   │   │   │   │   ├── BufferedConsoleOutput.php
│   │   │   │   │   └── ConsoleOutput.php
│   │   │   │   ├── Support
│   │   │   │   │   ├── Result.php
│   │   │   │   │   └── Utils.php
│   │   │   │   ├── Themes
│   │   │   │   │   ├── Contracts
│   │   │   │   │   │   └── Scrolling.php
│   │   │   │   │   └── Default
│   │   │   │   │       ├── Concerns
│   │   │   │   │       │   ├── DrawsBoxes.php
│   │   │   │   │       │   ├── DrawsScrollbars.php
│   │   │   │   │       │   └── InteractsWithStrings.php
│   │   │   │   │       ├── ClearRenderer.php
│   │   │   │   │       ├── ConfirmPromptRenderer.php
│   │   │   │   │       ├── MultiSearchPromptRenderer.php
│   │   │   │   │       ├── MultiSelectPromptRenderer.php
│   │   │   │   │       ├── NoteRenderer.php
│   │   │   │   │       ├── PasswordPromptRenderer.php
│   │   │   │   │       ├── PausePromptRenderer.php
│   │   │   │   │       ├── ProgressRenderer.php
│   │   │   │   │       ├── Renderer.php
│   │   │   │   │       ├── SearchPromptRenderer.php
│   │   │   │   │       ├── SelectPromptRenderer.php
│   │   │   │   │       ├── SpinnerRenderer.php
│   │   │   │   │       ├── SuggestPromptRenderer.php
│   │   │   │   │       ├── TableRenderer.php
│   │   │   │   │       ├── TextareaPromptRenderer.php
│   │   │   │   │       └── TextPromptRenderer.php
│   │   │   │   ├── Clear.php
│   │   │   │   ├── ConfirmPrompt.php
│   │   │   │   ├── FormBuilder.php
│   │   │   │   ├── FormStep.php
│   │   │   │   ├── helpers.php
│   │   │   │   ├── Key.php
│   │   │   │   ├── MultiSearchPrompt.php
│   │   │   │   ├── MultiSelectPrompt.php
│   │   │   │   ├── Note.php
│   │   │   │   ├── PasswordPrompt.php
│   │   │   │   ├── PausePrompt.php
│   │   │   │   ├── Progress.php
│   │   │   │   ├── Prompt.php
│   │   │   │   ├── SearchPrompt.php
│   │   │   │   ├── SelectPrompt.php
│   │   │   │   ├── Spinner.php
│   │   │   │   ├── SuggestPrompt.php
│   │   │   │   ├── Table.php
│   │   │   │   ├── Terminal.php
│   │   │   │   ├── TextareaPrompt.php
│   │   │   │   └── TextPrompt.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── phpunit.xml
│   │   │   └── README.md
│   │   ├── sail
│   │   │   ├── bin
│   │   │   │   └── sail
│   │   │   ├── database
│   │   │   │   ├── mariadb
│   │   │   │   │   └── create-testing-database.sh
│   │   │   │   ├── mysql
│   │   │   │   │   └── create-testing-database.sh
│   │   │   │   └── pgsql
│   │   │   │       └── create-testing-database.sql
│   │   │   ├── runtimes
│   │   │   │   ├── 8.0
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   ├── 8.1
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   ├── 8.2
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   ├── 8.3
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   └── 8.4
│   │   │   │       ├── Dockerfile
│   │   │   │       ├── php.ini
│   │   │   │       ├── start-container
│   │   │   │       └── supervisord.conf
│   │   │   ├── src
│   │   │   │   ├── Console
│   │   │   │   │   ├── Concerns
│   │   │   │   │   │   └── InteractsWithDockerComposeServices.php
│   │   │   │   │   ├── AddCommand.php
│   │   │   │   │   ├── InstallCommand.php
│   │   │   │   │   └── PublishCommand.php
│   │   │   │   └── SailServiceProvider.php
│   │   │   ├── stubs
│   │   │   │   ├── devcontainer.stub
│   │   │   │   ├── docker-compose.stub
│   │   │   │   ├── mailpit.stub
│   │   │   │   ├── mariadb.stub
│   │   │   │   ├── meilisearch.stub
│   │   │   │   ├── memcached.stub
│   │   │   │   ├── minio.stub
│   │   │   │   ├── mongodb.stub
│   │   │   │   ├── mysql.stub
│   │   │   │   ├── pgsql.stub
│   │   │   │   ├── redis.stub
│   │   │   │   ├── selenium.stub
│   │   │   │   ├── soketi.stub
│   │   │   │   ├── typesense.stub
│   │   │   │   └── valkey.stub
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   └── README.md
│   │   ├── serializable-closure
│   │   │   ├── src
│   │   │   │   ├── Contracts
│   │   │   │   │   ├── Serializable.php
│   │   │   │   │   └── Signer.php
│   │   │   │   ├── Exceptions
│   │   │   │   │   ├── InvalidSignatureException.php
│   │   │   │   │   ├── MissingSecretKeyException.php
│   │   │   │   │   └── PhpVersionNotSupportedException.php
│   │   │   │   ├── Serializers
│   │   │   │   │   ├── Native.php
│   │   │   │   │   └── Signed.php
│   │   │   │   ├── Signers
│   │   │   │   │   └── Hmac.php
│   │   │   │   ├── Support
│   │   │   │   │   ├── ClosureScope.php
│   │   │   │   │   ├── ClosureStream.php
│   │   │   │   │   ├── ReflectionClosure.php
│   │   │   │   │   └── SelfReference.php
│   │   │   │   ├── SerializableClosure.php
│   │   │   │   └── UnsignedSerializableClosure.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   └── README.md
│   │   └── tinker
│   │       ├── config
│   │       │   └── tinker.php
│   │       ├── src
│   │       │   ├── Console
│   │       │   │   └── TinkerCommand.php
│   │       │   ├── ClassAliasAutoloader.php
│   │       │   ├── TinkerCaster.php
│   │       │   └── TinkerServiceProvider.php
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       └── README.md
│   ├── league
│   │   ├── commonmark
│   │   │   ├── src
│   │   │   │   ├── Delimiter
│   │   │   │   │   ├── Processor
│   │   │   │   │   │   ├── CacheableDelimiterProcessorInterface.php
│   │   │   │   │   │   ├── DelimiterProcessorCollection.php
│   │   │   │   │   │   ├── DelimiterProcessorCollectionInterface.php
│   │   │   │   │   │   ├── DelimiterProcessorInterface.php
│   │   │   │   │   │   └── StaggeredDelimiterProcessor.php
│   │   │   │   │   ├── Bracket.php
│   │   │   │   │   ├── Delimiter.php
│   │   │   │   │   ├── DelimiterInterface.php
│   │   │   │   │   ├── DelimiterParser.php
│   │   │   │   │   └── DelimiterStack.php
│   │   │   │   ├── Environment
│   │   │   │   │   ├── Environment.php
│   │   │   │   │   ├── EnvironmentAwareInterface.php
│   │   │   │   │   ├── EnvironmentBuilderInterface.php
│   │   │   │   │   └── EnvironmentInterface.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── AbstractEvent.php
│   │   │   │   │   ├── DocumentParsedEvent.php
│   │   │   │   │   ├── DocumentPreParsedEvent.php
│   │   │   │   │   ├── DocumentPreRenderEvent.php
│   │   │   │   │   ├── DocumentRenderedEvent.php
│   │   │   │   │   └── ListenerData.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AlreadyInitializedException.php
│   │   │   │   │   ├── CommonMarkException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── IOException.php
│   │   │   │   │   ├── LogicException.php
│   │   │   │   │   ├── MissingDependencyException.php
│   │   │   │   │   └── UnexpectedEncodingException.php
│   │   │   │   ├── Extension
│   │   │   │   │   ├── Attributes
│   │   │   │   │   │   ├── Event
│   │   │   │   │   │   │   └── AttributesListener.php
│   │   │   │   │   │   ├── Node
│   │   │   │   │   │   │   ├── Attributes.php
│   │   │   │   │   │   │   └── AttributesInline.php
│   │   │   │   │   │   ├── Parser
│   │   │   │   │   │   │   ├── AttributesBlockContinueParser.php
│   │   │   │   │   │   │   ├── AttributesBlockStartParser.php
│   │   │   │   │   │   │   └── AttributesInlineParser.php
│   │   │   │   │   │   ├── Util
│   │   │   │   │   │   │   └── AttributesHelper.php
│   │   │   │   │   │   └── AttributesExtension.php
│   │   │   │   │   ├── Autolink
│   │   │   │   │   │   ├── AutolinkExtension.php
│   │   │   │   │   │   ├── EmailAutolinkParser.php
│   │   │   │   │   │   └── UrlAutolinkParser.php
│   │   │   │   │   ├── CommonMark
│   │   │   │   │   │   ├── Delimiter
│   │   │   │   │   │   │   └── Processor
│   │   │   │   │   │   │       └── EmphasisDelimiterProcessor.php
│   │   │   │   │   │   ├── Node
│   │   │   │   │   │   │   ├── Block
│   │   │   │   │   │   │   │   ├── BlockQuote.php
│   │   │   │   │   │   │   │   ├── FencedCode.php
│   │   │   │   │   │   │   │   ├── Heading.php
│   │   │   │   │   │   │   │   ├── HtmlBlock.php
│   │   │   │   │   │   │   │   ├── IndentedCode.php
│   │   │   │   │   │   │   │   ├── ListBlock.php
│   │   │   │   │   │   │   │   ├── ListData.php
│   │   │   │   │   │   │   │   ├── ListItem.php
│   │   │   │   │   │   │   │   └── ThematicBreak.php
│   │   │   │   │   │   │   └── Inline
│   │   │   │   │   │   │       ├── AbstractWebResource.php
│   │   │   │   │   │   │       ├── Code.php
│   │   │   │   │   │   │       ├── Emphasis.php
│   │   │   │   │   │   │       ├── HtmlInline.php
│   │   │   │   │   │   │       ├── Image.php
│   │   │   │   │   │   │       ├── Link.php
│   │   │   │   │   │   │       └── Strong.php
│   │   │   │   │   │   ├── Parser
│   │   │   │   │   │   │   ├── Block
│   │   │   │   │   │   │   │   ├── BlockQuoteParser.php
│   │   │   │   │   │   │   │   ├── BlockQuoteStartParser.php
│   │   │   │   │   │   │   │   ├── FencedCodeParser.php
│   │   │   │   │   │   │   │   ├── FencedCodeStartParser.php
│   │   │   │   │   │   │   │   ├── HeadingParser.php
│   │   │   │   │   │   │   │   ├── HeadingStartParser.php
│   │   │   │   │   │   │   │   ├── HtmlBlockParser.php
│   │   │   │   │   │   │   │   ├── HtmlBlockStartParser.php
│   │   │   │   │   │   │   │   ├── IndentedCodeParser.php
│   │   │   │   │   │   │   │   ├── IndentedCodeStartParser.php
│   │   │   │   │   │   │   │   ├── ListBlockParser.php
│   │   │   │   │   │   │   │   ├── ListBlockStartParser.php
│   │   │   │   │   │   │   │   ├── ListItemParser.php
│   │   │   │   │   │   │   │   ├── ThematicBreakParser.php
│   │   │   │   │   │   │   │   └── ThematicBreakStartParser.php
│   │   │   │   │   │   │   └── Inline
│   │   │   │   │   │   │       ├── AutolinkParser.php
│   │   │   │   │   │   │       ├── BacktickParser.php
│   │   │   │   │   │   │       ├── BangParser.php
│   │   │   │   │   │   │       ├── CloseBracketParser.php
│   │   │   │   │   │   │       ├── EntityParser.php
│   │   │   │   │   │   │       ├── EscapableParser.php
│   │   │   │   │   │   │       ├── HtmlInlineParser.php
│   │   │   │   │   │   │       └── OpenBracketParser.php
│   │   │   │   │   │   ├── Renderer
│   │   │   │   │   │   │   ├── Block
│   │   │   │   │   │   │   │   ├── BlockQuoteRenderer.php
│   │   │   │   │   │   │   │   ├── FencedCodeRenderer.php
│   │   │   │   │   │   │   │   ├── HeadingRenderer.php
│   │   │   │   │   │   │   │   ├── HtmlBlockRenderer.php
│   │   │   │   │   │   │   │   ├── IndentedCodeRenderer.php
│   │   │   │   │   │   │   │   ├── ListBlockRenderer.php
│   │   │   │   │   │   │   │   ├── ListItemRenderer.php
│   │   │   │   │   │   │   │   └── ThematicBreakRenderer.php
│   │   │   │   │   │   │   └── Inline
│   │   │   │   │   │   │       ├── CodeRenderer.php
│   │   │   │   │   │   │       ├── EmphasisRenderer.php
│   │   │   │   │   │   │       ├── HtmlInlineRenderer.php
│   │   │   │   │   │   │       ├── ImageRenderer.php
│   │   │   │   │   │   │       ├── LinkRenderer.php
│   │   │   │   │   │   │       └── StrongRenderer.php
│   │   │   │   │   │   └── CommonMarkCoreExtension.php
│   │   │   │   │   ├── DefaultAttributes
│   │   │   │   │   │   ├── ApplyDefaultAttributesProcessor.php
│   │   │   │   │   │   └── DefaultAttributesExtension.php
│   │   │   │   │   ├── DescriptionList
│   │   │   │   │   │   ├── Event
│   │   │   │   │   │   │   ├── ConsecutiveDescriptionListMerger.php
│   │   │   │   │   │   │   └── LooseDescriptionHandler.php
│   │   │   │   │   │   ├── Node
│   │   │   │   │   │   │   ├── Description.php
│   │   │   │   │   │   │   ├── DescriptionList.php
│   │   │   │   │   │   │   └── DescriptionTerm.php
│   │   │   │   │   │   ├── Parser
│   │   │   │   │   │   │   ├── DescriptionContinueParser.php
│   │   │   │   │   │   │   ├── DescriptionListContinueParser.php
│   │   │   │   │   │   │   ├── DescriptionStartParser.php
│   │   │   │   │   │   │   └── DescriptionTermContinueParser.php
│   │   │   │   │   │   ├── Renderer
│   │   │   │   │   │   │   ├── DescriptionListRenderer.php
│   │   │   │   │   │   │   ├── DescriptionRenderer.php
│   │   │   │   │   │   │   └── DescriptionTermRenderer.php
│   │   │   │   │   │   └── DescriptionListExtension.php
│   │   │   │   │   ├── DisallowedRawHtml
│   │   │   │   │   │   ├── DisallowedRawHtmlExtension.php
│   │   │   │   │   │   └── DisallowedRawHtmlRenderer.php
│   │   │   │   │   ├── Embed
│   │   │   │   │   │   ├── Bridge
│   │   │   │   │   │   │   └── OscaroteroEmbedAdapter.php
│   │   │   │   │   │   ├── DomainFilteringAdapter.php
│   │   │   │   │   │   ├── Embed.php
│   │   │   │   │   │   ├── EmbedAdapterInterface.php
│   │   │   │   │   │   ├── EmbedExtension.php
│   │   │   │   │   │   ├── EmbedParser.php
│   │   │   │   │   │   ├── EmbedProcessor.php
│   │   │   │   │   │   ├── EmbedRenderer.php
│   │   │   │   │   │   └── EmbedStartParser.php
│   │   │   │   │   ├── ExternalLink
│   │   │   │   │   │   ├── ExternalLinkExtension.php
│   │   │   │   │   │   └── ExternalLinkProcessor.php
│   │   │   │   │   ├── Footnote
│   │   │   │   │   │   ├── Event
│   │   │   │   │   │   │   ├── AnonymousFootnotesListener.php
│   │   │   │   │   │   │   ├── FixOrphanedFootnotesAndRefsListener.php
│   │   │   │   │   │   │   ├── GatherFootnotesListener.php
│   │   │   │   │   │   │   └── NumberFootnotesListener.php
│   │   │   │   │   │   ├── Node
│   │   │   │   │   │   │   ├── Footnote.php
│   │   │   │   │   │   │   ├── FootnoteBackref.php
│   │   │   │   │   │   │   ├── FootnoteContainer.php
│   │   │   │   │   │   │   └── FootnoteRef.php
│   │   │   │   │   │   ├── Parser
│   │   │   │   │   │   │   ├── AnonymousFootnoteRefParser.php
│   │   │   │   │   │   │   ├── FootnoteParser.php
│   │   │   │   │   │   │   ├── FootnoteRefParser.php
│   │   │   │   │   │   │   └── FootnoteStartParser.php
│   │   │   │   │   │   ├── Renderer
│   │   │   │   │   │   │   ├── FootnoteBackrefRenderer.php
│   │   │   │   │   │   │   ├── FootnoteContainerRenderer.php
│   │   │   │   │   │   │   ├── FootnoteRefRenderer.php
│   │   │   │   │   │   │   └── FootnoteRenderer.php
│   │   │   │   │   │   └── FootnoteExtension.php
│   │   │   │   │   ├── FrontMatter
│   │   │   │   │   │   ├── Data
│   │   │   │   │   │   │   ├── FrontMatterDataParserInterface.php
│   │   │   │   │   │   │   ├── LibYamlFrontMatterParser.php
│   │   │   │   │   │   │   └── SymfonyYamlFrontMatterParser.php
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   └── InvalidFrontMatterException.php
│   │   │   │   │   │   ├── Input
│   │   │   │   │   │   │   └── MarkdownInputWithFrontMatter.php
│   │   │   │   │   │   ├── Listener
│   │   │   │   │   │   │   ├── FrontMatterPostRenderListener.php
│   │   │   │   │   │   │   └── FrontMatterPreParser.php
│   │   │   │   │   │   ├── Output
│   │   │   │   │   │   │   └── RenderedContentWithFrontMatter.php
│   │   │   │   │   │   ├── FrontMatterExtension.php
│   │   │   │   │   │   ├── FrontMatterParser.php
│   │   │   │   │   │   ├── FrontMatterParserInterface.php
│   │   │   │   │   │   └── FrontMatterProviderInterface.php
│   │   │   │   │   ├── HeadingPermalink
│   │   │   │   │   │   ├── HeadingPermalink.php
│   │   │   │   │   │   ├── HeadingPermalinkExtension.php
│   │   │   │   │   │   ├── HeadingPermalinkProcessor.php
│   │   │   │   │   │   └── HeadingPermalinkRenderer.php
│   │   │   │   │   ├── InlinesOnly
│   │   │   │   │   │   ├── ChildRenderer.php
│   │   │   │   │   │   └── InlinesOnlyExtension.php
│   │   │   │   │   ├── Mention
│   │   │   │   │   │   ├── Generator
│   │   │   │   │   │   │   ├── CallbackGenerator.php
│   │   │   │   │   │   │   ├── MentionGeneratorInterface.php
│   │   │   │   │   │   │   └── StringTemplateLinkGenerator.php
│   │   │   │   │   │   ├── Mention.php
│   │   │   │   │   │   ├── MentionExtension.php
│   │   │   │   │   │   └── MentionParser.php
│   │   │   │   │   ├── SmartPunct
│   │   │   │   │   │   ├── DashParser.php
│   │   │   │   │   │   ├── EllipsesParser.php
│   │   │   │   │   │   ├── Quote.php
│   │   │   │   │   │   ├── QuoteParser.php
│   │   │   │   │   │   ├── QuoteProcessor.php
│   │   │   │   │   │   ├── ReplaceUnpairedQuotesListener.php
│   │   │   │   │   │   └── SmartPunctExtension.php
│   │   │   │   │   ├── Strikethrough
│   │   │   │   │   │   ├── Strikethrough.php
│   │   │   │   │   │   ├── StrikethroughDelimiterProcessor.php
│   │   │   │   │   │   ├── StrikethroughExtension.php
│   │   │   │   │   │   └── StrikethroughRenderer.php
│   │   │   │   │   ├── Table
│   │   │   │   │   │   ├── Table.php
│   │   │   │   │   │   ├── TableCell.php
│   │   │   │   │   │   ├── TableCellRenderer.php
│   │   │   │   │   │   ├── TableExtension.php
│   │   │   │   │   │   ├── TableParser.php
│   │   │   │   │   │   ├── TableRenderer.php
│   │   │   │   │   │   ├── TableRow.php
│   │   │   │   │   │   ├── TableRowRenderer.php
│   │   │   │   │   │   ├── TableSection.php
│   │   │   │   │   │   ├── TableSectionRenderer.php
│   │   │   │   │   │   └── TableStartParser.php
│   │   │   │   │   ├── TableOfContents
│   │   │   │   │   │   ├── Node
│   │   │   │   │   │   │   ├── TableOfContents.php
│   │   │   │   │   │   │   └── TableOfContentsPlaceholder.php
│   │   │   │   │   │   ├── Normalizer
│   │   │   │   │   │   │   ├── AsIsNormalizerStrategy.php
│   │   │   │   │   │   │   ├── FlatNormalizerStrategy.php
│   │   │   │   │   │   │   ├── NormalizerStrategyInterface.php
│   │   │   │   │   │   │   └── RelativeNormalizerStrategy.php
│   │   │   │   │   │   ├── TableOfContentsBuilder.php
│   │   │   │   │   │   ├── TableOfContentsExtension.php
│   │   │   │   │   │   ├── TableOfContentsGenerator.php
│   │   │   │   │   │   ├── TableOfContentsGeneratorInterface.php
│   │   │   │   │   │   ├── TableOfContentsPlaceholderParser.php
│   │   │   │   │   │   ├── TableOfContentsPlaceholderRenderer.php
│   │   │   │   │   │   └── TableOfContentsRenderer.php
│   │   │   │   │   ├── TaskList
│   │   │   │   │   │   ├── TaskListExtension.php
│   │   │   │   │   │   ├── TaskListItemMarker.php
│   │   │   │   │   │   ├── TaskListItemMarkerParser.php
│   │   │   │   │   │   └── TaskListItemMarkerRenderer.php
│   │   │   │   │   ├── ConfigurableExtensionInterface.php
│   │   │   │   │   ├── ExtensionInterface.php
│   │   │   │   │   └── GithubFlavoredMarkdownExtension.php
│   │   │   │   ├── Input
│   │   │   │   │   ├── MarkdownInput.php
│   │   │   │   │   └── MarkdownInputInterface.php
│   │   │   │   ├── Node
│   │   │   │   │   ├── Block
│   │   │   │   │   │   ├── AbstractBlock.php
│   │   │   │   │   │   ├── Document.php
│   │   │   │   │   │   ├── Paragraph.php
│   │   │   │   │   │   └── TightBlockInterface.php
│   │   │   │   │   ├── Inline
│   │   │   │   │   │   ├── AbstractInline.php
│   │   │   │   │   │   ├── AbstractStringContainer.php
│   │   │   │   │   │   ├── AdjacentTextMerger.php
│   │   │   │   │   │   ├── DelimitedInterface.php
│   │   │   │   │   │   ├── Newline.php
│   │   │   │   │   │   └── Text.php
│   │   │   │   │   ├── Query
│   │   │   │   │   │   ├── AndExpr.php
│   │   │   │   │   │   ├── ExpressionInterface.php
│   │   │   │   │   │   └── OrExpr.php
│   │   │   │   │   ├── Node.php
│   │   │   │   │   ├── NodeIterator.php
│   │   │   │   │   ├── NodeWalker.php
│   │   │   │   │   ├── NodeWalkerEvent.php
│   │   │   │   │   ├── Query.php
│   │   │   │   │   ├── RawMarkupContainerInterface.php
│   │   │   │   │   ├── StringContainerHelper.php
│   │   │   │   │   └── StringContainerInterface.php
│   │   │   │   ├── Normalizer
│   │   │   │   │   ├── SlugNormalizer.php
│   │   │   │   │   ├── TextNormalizer.php
│   │   │   │   │   ├── TextNormalizerInterface.php
│   │   │   │   │   ├── UniqueSlugNormalizer.php
│   │   │   │   │   └── UniqueSlugNormalizerInterface.php
│   │   │   │   ├── Output
│   │   │   │   │   ├── RenderedContent.php
│   │   │   │   │   └── RenderedContentInterface.php
│   │   │   │   ├── Parser
│   │   │   │   │   ├── Block
│   │   │   │   │   │   ├── AbstractBlockContinueParser.php
│   │   │   │   │   │   ├── BlockContinue.php
│   │   │   │   │   │   ├── BlockContinueParserInterface.php
│   │   │   │   │   │   ├── BlockContinueParserWithInlinesInterface.php
│   │   │   │   │   │   ├── BlockStart.php
│   │   │   │   │   │   ├── BlockStartParserInterface.php
│   │   │   │   │   │   ├── DocumentBlockParser.php
│   │   │   │   │   │   ├── ParagraphParser.php
│   │   │   │   │   │   └── SkipLinesStartingWithLettersParser.php
│   │   │   │   │   ├── Inline
│   │   │   │   │   │   ├── InlineParserInterface.php
│   │   │   │   │   │   ├── InlineParserMatch.php
│   │   │   │   │   │   └── NewlineParser.php
│   │   │   │   │   ├── Cursor.php
│   │   │   │   │   ├── CursorState.php
│   │   │   │   │   ├── InlineParserContext.php
│   │   │   │   │   ├── InlineParserEngine.php
│   │   │   │   │   ├── InlineParserEngineInterface.php
│   │   │   │   │   ├── MarkdownParser.php
│   │   │   │   │   ├── MarkdownParserInterface.php
│   │   │   │   │   ├── MarkdownParserState.php
│   │   │   │   │   ├── MarkdownParserStateInterface.php
│   │   │   │   │   └── ParserLogicException.php
│   │   │   │   ├── Reference
│   │   │   │   │   ├── MemoryLimitedReferenceMap.php
│   │   │   │   │   ├── Reference.php
│   │   │   │   │   ├── ReferenceableInterface.php
│   │   │   │   │   ├── ReferenceInterface.php
│   │   │   │   │   ├── ReferenceMap.php
│   │   │   │   │   ├── ReferenceMapInterface.php
│   │   │   │   │   └── ReferenceParser.php
│   │   │   │   ├── Renderer
│   │   │   │   │   ├── Block
│   │   │   │   │   │   ├── DocumentRenderer.php
│   │   │   │   │   │   └── ParagraphRenderer.php
│   │   │   │   │   ├── Inline
│   │   │   │   │   │   ├── NewlineRenderer.php
│   │   │   │   │   │   └── TextRenderer.php
│   │   │   │   │   ├── ChildNodeRendererInterface.php
│   │   │   │   │   ├── DocumentRendererInterface.php
│   │   │   │   │   ├── HtmlDecorator.php
│   │   │   │   │   ├── HtmlRenderer.php
│   │   │   │   │   ├── MarkdownRendererInterface.php
│   │   │   │   │   ├── NodeRendererInterface.php
│   │   │   │   │   └── NoMatchingRendererException.php
│   │   │   │   ├── Util
│   │   │   │   │   ├── ArrayCollection.php
│   │   │   │   │   ├── Html5EntityDecoder.php
│   │   │   │   │   ├── HtmlElement.php
│   │   │   │   │   ├── HtmlFilter.php
│   │   │   │   │   ├── LinkParserHelper.php
│   │   │   │   │   ├── PrioritizedList.php
│   │   │   │   │   ├── RegexHelper.php
│   │   │   │   │   ├── SpecReader.php
│   │   │   │   │   ├── UrlEncoder.php
│   │   │   │   │   └── Xml.php
│   │   │   │   ├── Xml
│   │   │   │   │   ├── FallbackNodeXmlRenderer.php
│   │   │   │   │   ├── MarkdownToXmlConverter.php
│   │   │   │   │   ├── XmlNodeRendererInterface.php
│   │   │   │   │   └── XmlRenderer.php
│   │   │   │   ├── CommonMarkConverter.php
│   │   │   │   ├── ConverterInterface.php
│   │   │   │   ├── GithubFlavoredMarkdownConverter.php
│   │   │   │   ├── MarkdownConverter.php
│   │   │   │   └── MarkdownConverterInterface.php
│   │   │   ├── .phpstorm.meta.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── config
│   │   │   ├── src
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ConfigurationExceptionInterface.php
│   │   │   │   │   ├── InvalidConfigurationException.php
│   │   │   │   │   ├── UnknownOptionException.php
│   │   │   │   │   └── ValidationException.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── ConfigurationAwareInterface.php
│   │   │   │   ├── ConfigurationBuilderInterface.php
│   │   │   │   ├── ConfigurationInterface.php
│   │   │   │   ├── ConfigurationProviderInterface.php
│   │   │   │   ├── MutableConfigurationInterface.php
│   │   │   │   ├── ReadOnlyConfiguration.php
│   │   │   │   └── SchemaBuilderInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   └── README.md
│   │   ├── flysystem
│   │   │   ├── src
│   │   │   │   ├── UnixVisibility
│   │   │   │   │   ├── PortableVisibilityConverter.php
│   │   │   │   │   └── VisibilityConverter.php
│   │   │   │   ├── UrlGeneration
│   │   │   │   │   ├── ChainedPublicUrlGenerator.php
│   │   │   │   │   ├── PrefixPublicUrlGenerator.php
│   │   │   │   │   ├── PublicUrlGenerator.php
│   │   │   │   │   ├── ShardedPrefixPublicUrlGenerator.php
│   │   │   │   │   └── TemporaryUrlGenerator.php
│   │   │   │   ├── CalculateChecksumFromStream.php
│   │   │   │   ├── ChecksumAlgoIsNotSupported.php
│   │   │   │   ├── ChecksumProvider.php
│   │   │   │   ├── Config.php
│   │   │   │   ├── CorruptedPathDetected.php
│   │   │   │   ├── DecoratedAdapter.php
│   │   │   │   ├── DirectoryAttributes.php
│   │   │   │   ├── DirectoryListing.php
│   │   │   │   ├── FileAttributes.php
│   │   │   │   ├── Filesystem.php
│   │   │   │   ├── FilesystemAdapter.php
│   │   │   │   ├── FilesystemException.php
│   │   │   │   ├── FilesystemOperationFailed.php
│   │   │   │   ├── FilesystemOperator.php
│   │   │   │   ├── FilesystemReader.php
│   │   │   │   ├── FilesystemWriter.php
│   │   │   │   ├── InvalidStreamProvided.php
│   │   │   │   ├── InvalidVisibilityProvided.php
│   │   │   │   ├── MountManager.php
│   │   │   │   ├── PathNormalizer.php
│   │   │   │   ├── PathPrefixer.php
│   │   │   │   ├── PathTraversalDetected.php
│   │   │   │   ├── PortableVisibilityGuard.php
│   │   │   │   ├── ProxyArrayAccessToProperties.php
│   │   │   │   ├── ResolveIdenticalPathConflict.php
│   │   │   │   ├── StorageAttributes.php
│   │   │   │   ├── SymbolicLinkEncountered.php
│   │   │   │   ├── UnableToCheckDirectoryExistence.php
│   │   │   │   ├── UnableToCheckExistence.php
│   │   │   │   ├── UnableToCheckFileExistence.php
│   │   │   │   ├── UnableToCopyFile.php
│   │   │   │   ├── UnableToCreateDirectory.php
│   │   │   │   ├── UnableToDeleteDirectory.php
│   │   │   │   ├── UnableToDeleteFile.php
│   │   │   │   ├── UnableToGeneratePublicUrl.php
│   │   │   │   ├── UnableToGenerateTemporaryUrl.php
│   │   │   │   ├── UnableToListContents.php
│   │   │   │   ├── UnableToMountFilesystem.php
│   │   │   │   ├── UnableToMoveFile.php
│   │   │   │   ├── UnableToProvideChecksum.php
│   │   │   │   ├── UnableToReadFile.php
│   │   │   │   ├── UnableToResolveFilesystemMount.php
│   │   │   │   ├── UnableToRetrieveMetadata.php
│   │   │   │   ├── UnableToSetVisibility.php
│   │   │   │   ├── UnableToWriteFile.php
│   │   │   │   ├── UnreadableFileEncountered.php
│   │   │   │   ├── Visibility.php
│   │   │   │   └── WhitespacePathNormalizer.php
│   │   │   ├── composer.json
│   │   │   ├── INFO.md
│   │   │   ├── LICENSE
│   │   │   └── readme.md
│   │   ├── flysystem-local
│   │   │   ├── composer.json
│   │   │   ├── FallbackMimeTypeDetector.php
│   │   │   ├── LICENSE
│   │   │   └── LocalFilesystemAdapter.php
│   │   ├── mime-type-detection
│   │   │   ├── src
│   │   │   │   ├── EmptyExtensionToMimeTypeMap.php
│   │   │   │   ├── ExtensionLookup.php
│   │   │   │   ├── ExtensionMimeTypeDetector.php
│   │   │   │   ├── ExtensionToMimeTypeMap.php
│   │   │   │   ├── FinfoMimeTypeDetector.php
│   │   │   │   ├── GeneratedExtensionToMimeTypeMap.php
│   │   │   │   ├── MimeTypeDetector.php
│   │   │   │   └── OverridingExtensionToMimeTypeMap.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   └── LICENSE
│   │   ├── uri
│   │   │   ├── UriTemplate
│   │   │   │   ├── Expression.php
│   │   │   │   ├── Operator.php
│   │   │   │   ├── Template.php
│   │   │   │   ├── TemplateCanNotBeExpanded.php
│   │   │   │   ├── VariableBag.php
│   │   │   │   └── VarSpecifier.php
│   │   │   ├── BaseUri.php
│   │   │   ├── composer.json
│   │   │   ├── Http.php
│   │   │   ├── HttpFactory.php
│   │   │   ├── LICENSE
│   │   │   ├── Uri.php
│   │   │   ├── UriInfo.php
│   │   │   ├── UriResolver.php
│   │   │   └── UriTemplate.php
│   │   └── uri-interfaces
│   │       ├── Contracts
│   │       │   ├── AuthorityInterface.php
│   │       │   ├── DataPathInterface.php
│   │       │   ├── DomainHostInterface.php
│   │       │   ├── FragmentInterface.php
│   │       │   ├── HostInterface.php
│   │       │   ├── IpHostInterface.php
│   │       │   ├── PathInterface.php
│   │       │   ├── PortInterface.php
│   │       │   ├── QueryInterface.php
│   │       │   ├── SegmentedPathInterface.php
│   │       │   ├── UriAccess.php
│   │       │   ├── UriComponentInterface.php
│   │       │   ├── UriException.php
│   │       │   ├── UriInterface.php
│   │       │   └── UserInfoInterface.php
│   │       ├── Exceptions
│   │       │   ├── ConversionFailed.php
│   │       │   ├── MissingFeature.php
│   │       │   ├── OffsetOutOfBounds.php
│   │       │   └── SyntaxError.php
│   │       ├── Idna
│   │       │   ├── Converter.php
│   │       │   ├── Error.php
│   │       │   ├── Option.php
│   │       │   └── Result.php
│   │       ├── IPv4
│   │       │   ├── BCMathCalculator.php
│   │       │   ├── Calculator.php
│   │       │   ├── Converter.php
│   │       │   ├── GMPCalculator.php
│   │       │   └── NativeCalculator.php
│   │       ├── IPv6
│   │       │   └── Converter.php
│   │       ├── KeyValuePair
│   │       │   └── Converter.php
│   │       ├── composer.json
│   │       ├── Encoder.php
│   │       ├── FeatureDetection.php
│   │       ├── LICENSE
│   │       ├── QueryString.php
│   │       └── UriString.php
│   ├── mockery
│   │   └── mockery
│   │       ├── docs
│   │       │   ├── _static
│   │       │   │   └── .gitkeep
│   │       │   ├── cookbook
│   │       │   │   ├── big_parent_class.rst
│   │       │   │   ├── class_constants.rst
│   │       │   │   ├── default_expectations.rst
│   │       │   │   ├── detecting_mock_objects.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── mockery_on.rst
│   │       │   │   ├── mocking_class_within_class.rst
│   │       │   │   ├── mocking_hard_dependencies.rst
│   │       │   │   └── not_calling_the_constructor.rst
│   │       │   ├── getting_started
│   │       │   │   ├── index.rst
│   │       │   │   ├── installation.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── quick_reference.rst
│   │       │   │   ├── simple_example.rst
│   │       │   │   └── upgrading.rst
│   │       │   ├── mockery
│   │       │   │   ├── configuration.rst
│   │       │   │   ├── exceptions.rst
│   │       │   │   ├── gotchas.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   └── reserved_method_names.rst
│   │       │   ├── reference
│   │       │   │   ├── alternative_should_receive_syntax.rst
│   │       │   │   ├── argument_validation.rst
│   │       │   │   ├── creating_test_doubles.rst
│   │       │   │   ├── demeter_chains.rst
│   │       │   │   ├── expectations.rst
│   │       │   │   ├── final_methods_classes.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── instance_mocking.rst
│   │       │   │   ├── magic_methods.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── partial_mocks.rst
│   │       │   │   ├── pass_by_reference_behaviours.rst
│   │       │   │   ├── phpunit_integration.rst
│   │       │   │   ├── protected_methods.rst
│   │       │   │   ├── public_properties.rst
│   │       │   │   ├── public_static_properties.rst
│   │       │   │   └── spies.rst
│   │       │   ├── .gitignore
│   │       │   ├── conf.py
│   │       │   ├── index.rst
│   │       │   ├── Makefile
│   │       │   ├── README.md
│   │       │   └── requirements.txt
│   │       ├── library
│   │       │   ├── Mockery
│   │       │   │   ├── Adapter
│   │       │   │   │   └── Phpunit
│   │       │   │   │       ├── MockeryPHPUnitIntegration.php
│   │       │   │   │       ├── MockeryPHPUnitIntegrationAssertPostConditions.php
│   │       │   │   │       ├── MockeryTestCase.php
│   │       │   │   │       ├── MockeryTestCaseSetUp.php
│   │       │   │   │       ├── TestListener.php
│   │       │   │   │       └── TestListenerTrait.php
│   │       │   │   ├── CountValidator
│   │       │   │   │   ├── AtLeast.php
│   │       │   │   │   ├── AtMost.php
│   │       │   │   │   ├── CountValidatorAbstract.php
│   │       │   │   │   ├── CountValidatorInterface.php
│   │       │   │   │   ├── Exact.php
│   │       │   │   │   └── Exception.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── BadMethodCallException.php
│   │       │   │   │   ├── InvalidArgumentException.php
│   │       │   │   │   ├── InvalidCountException.php
│   │       │   │   │   ├── InvalidOrderException.php
│   │       │   │   │   ├── MockeryExceptionInterface.php
│   │       │   │   │   ├── NoMatchingExpectationException.php
│   │       │   │   │   └── RuntimeException.php
│   │       │   │   ├── Generator
│   │       │   │   │   ├── StringManipulation
│   │       │   │   │   │   └── Pass
│   │       │   │   │   │       ├── AvoidMethodClashPass.php
│   │       │   │   │   │       ├── CallTypeHintPass.php
│   │       │   │   │   │       ├── ClassAttributesPass.php
│   │       │   │   │   │       ├── ClassNamePass.php
│   │       │   │   │   │       ├── ClassPass.php
│   │       │   │   │   │       ├── ConstantsPass.php
│   │       │   │   │   │       ├── InstanceMockPass.php
│   │       │   │   │   │       ├── InterfacePass.php
│   │       │   │   │   │       ├── MagicMethodTypeHintsPass.php
│   │       │   │   │   │       ├── MethodDefinitionPass.php
│   │       │   │   │   │       ├── Pass.php
│   │       │   │   │   │       ├── RemoveBuiltinMethodsThatAreFinalPass.php
│   │       │   │   │   │       ├── RemoveDestructorPass.php
│   │       │   │   │   │       ├── RemoveUnserializeForInternalSerializableClassesPass.php
│   │       │   │   │   │       └── TraitPass.php
│   │       │   │   │   ├── CachingGenerator.php
│   │       │   │   │   ├── DefinedTargetClass.php
│   │       │   │   │   ├── Generator.php
│   │       │   │   │   ├── Method.php
│   │       │   │   │   ├── MockConfiguration.php
│   │       │   │   │   ├── MockConfigurationBuilder.php
│   │       │   │   │   ├── MockDefinition.php
│   │       │   │   │   ├── MockNameBuilder.php
│   │       │   │   │   ├── Parameter.php
│   │       │   │   │   ├── StringManipulationGenerator.php
│   │       │   │   │   ├── TargetClassInterface.php
│   │       │   │   │   └── UndefinedTargetClass.php
│   │       │   │   ├── Loader
│   │       │   │   │   ├── EvalLoader.php
│   │       │   │   │   ├── Loader.php
│   │       │   │   │   └── RequireLoader.php
│   │       │   │   ├── Matcher
│   │       │   │   │   ├── AndAnyOtherArgs.php
│   │       │   │   │   ├── Any.php
│   │       │   │   │   ├── AnyArgs.php
│   │       │   │   │   ├── AnyOf.php
│   │       │   │   │   ├── ArgumentListMatcher.php
│   │       │   │   │   ├── Closure.php
│   │       │   │   │   ├── Contains.php
│   │       │   │   │   ├── Ducktype.php
│   │       │   │   │   ├── HasKey.php
│   │       │   │   │   ├── HasValue.php
│   │       │   │   │   ├── IsEqual.php
│   │       │   │   │   ├── IsSame.php
│   │       │   │   │   ├── MatcherAbstract.php
│   │       │   │   │   ├── MatcherInterface.php
│   │       │   │   │   ├── MultiArgumentClosure.php
│   │       │   │   │   ├── MustBe.php
│   │       │   │   │   ├── NoArgs.php
│   │       │   │   │   ├── Not.php
│   │       │   │   │   ├── NotAnyOf.php
│   │       │   │   │   ├── Pattern.php
│   │       │   │   │   ├── Subset.php
│   │       │   │   │   └── Type.php
│   │       │   │   ├── ClosureWrapper.php
│   │       │   │   ├── CompositeExpectation.php
│   │       │   │   ├── Configuration.php
│   │       │   │   ├── Container.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── Expectation.php
│   │       │   │   ├── ExpectationDirector.php
│   │       │   │   ├── ExpectationInterface.php
│   │       │   │   ├── ExpectsHigherOrderMessage.php
│   │       │   │   ├── HigherOrderMessage.php
│   │       │   │   ├── Instantiator.php
│   │       │   │   ├── LegacyMockInterface.php
│   │       │   │   ├── MethodCall.php
│   │       │   │   ├── Mock.php
│   │       │   │   ├── MockInterface.php
│   │       │   │   ├── QuickDefinitionsConfiguration.php
│   │       │   │   ├── ReceivedMethodCalls.php
│   │       │   │   ├── Reflector.php
│   │       │   │   ├── Undefined.php
│   │       │   │   ├── VerificationDirector.php
│   │       │   │   └── VerificationExpectation.php
│   │       │   ├── helpers.php
│   │       │   └── Mockery.php
│   │       ├── .phpstorm.meta.php
│   │       ├── .readthedocs.yml
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── CONTRIBUTING.md
│   │       ├── COPYRIGHT.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── SECURITY.md
│   ├── monolog
│   │   └── monolog
│   │       ├── src
│   │       │   └── Monolog
│   │       │       ├── Attribute
│   │       │       │   ├── AsMonologProcessor.php
│   │       │       │   └── WithMonologChannel.php
│   │       │       ├── Formatter
│   │       │       │   ├── ChromePHPFormatter.php
│   │       │       │   ├── ElasticaFormatter.php
│   │       │       │   ├── ElasticsearchFormatter.php
│   │       │       │   ├── FlowdockFormatter.php
│   │       │       │   ├── FluentdFormatter.php
│   │       │       │   ├── FormatterInterface.php
│   │       │       │   ├── GelfMessageFormatter.php
│   │       │       │   ├── GoogleCloudLoggingFormatter.php
│   │       │       │   ├── HtmlFormatter.php
│   │       │       │   ├── JsonFormatter.php
│   │       │       │   ├── LineFormatter.php
│   │       │       │   ├── LogglyFormatter.php
│   │       │       │   ├── LogmaticFormatter.php
│   │       │       │   ├── LogstashFormatter.php
│   │       │       │   ├── MongoDBFormatter.php
│   │       │       │   ├── NormalizerFormatter.php
│   │       │       │   ├── ScalarFormatter.php
│   │       │       │   ├── SyslogFormatter.php
│   │       │       │   └── WildfireFormatter.php
│   │       │       ├── Handler
│   │       │       │   ├── Curl
│   │       │       │   │   └── Util.php
│   │       │       │   ├── FingersCrossed
│   │       │       │   │   ├── ActivationStrategyInterface.php
│   │       │       │   │   ├── ChannelLevelActivationStrategy.php
│   │       │       │   │   └── ErrorLevelActivationStrategy.php
│   │       │       │   ├── Slack
│   │       │       │   │   └── SlackRecord.php
│   │       │       │   ├── SyslogUdp
│   │       │       │   │   └── UdpSocket.php
│   │       │       │   ├── AbstractHandler.php
│   │       │       │   ├── AbstractProcessingHandler.php
│   │       │       │   ├── AbstractSyslogHandler.php
│   │       │       │   ├── AmqpHandler.php
│   │       │       │   ├── BrowserConsoleHandler.php
│   │       │       │   ├── BufferHandler.php
│   │       │       │   ├── ChromePHPHandler.php
│   │       │       │   ├── CouchDBHandler.php
│   │       │       │   ├── CubeHandler.php
│   │       │       │   ├── DeduplicationHandler.php
│   │       │       │   ├── DoctrineCouchDBHandler.php
│   │       │       │   ├── DynamoDbHandler.php
│   │       │       │   ├── ElasticaHandler.php
│   │       │       │   ├── ElasticsearchHandler.php
│   │       │       │   ├── ErrorLogHandler.php
│   │       │       │   ├── FallbackGroupHandler.php
│   │       │       │   ├── FilterHandler.php
│   │       │       │   ├── FingersCrossedHandler.php
│   │       │       │   ├── FirePHPHandler.php
│   │       │       │   ├── FleepHookHandler.php
│   │       │       │   ├── FlowdockHandler.php
│   │       │       │   ├── FormattableHandlerInterface.php
│   │       │       │   ├── FormattableHandlerTrait.php
│   │       │       │   ├── GelfHandler.php
│   │       │       │   ├── GroupHandler.php
│   │       │       │   ├── Handler.php
│   │       │       │   ├── HandlerInterface.php
│   │       │       │   ├── HandlerWrapper.php
│   │       │       │   ├── IFTTTHandler.php
│   │       │       │   ├── InsightOpsHandler.php
│   │       │       │   ├── LogEntriesHandler.php
│   │       │       │   ├── LogglyHandler.php
│   │       │       │   ├── LogmaticHandler.php
│   │       │       │   ├── MailHandler.php
│   │       │       │   ├── MandrillHandler.php
│   │       │       │   ├── MissingExtensionException.php
│   │       │       │   ├── MongoDBHandler.php
│   │       │       │   ├── NativeMailerHandler.php
│   │       │       │   ├── NewRelicHandler.php
│   │       │       │   ├── NoopHandler.php
│   │       │       │   ├── NullHandler.php
│   │       │       │   ├── OverflowHandler.php
│   │       │       │   ├── PHPConsoleHandler.php
│   │       │       │   ├── ProcessableHandlerInterface.php
│   │       │       │   ├── ProcessableHandlerTrait.php
│   │       │       │   ├── ProcessHandler.php
│   │       │       │   ├── PsrHandler.php
│   │       │       │   ├── PushoverHandler.php
│   │       │       │   ├── RedisHandler.php
│   │       │       │   ├── RedisPubSubHandler.php
│   │       │       │   ├── RollbarHandler.php
│   │       │       │   ├── RotatingFileHandler.php
│   │       │       │   ├── SamplingHandler.php
│   │       │       │   ├── SendGridHandler.php
│   │       │       │   ├── SlackHandler.php
│   │       │       │   ├── SlackWebhookHandler.php
│   │       │       │   ├── SocketHandler.php
│   │       │       │   ├── SqsHandler.php
│   │       │       │   ├── StreamHandler.php
│   │       │       │   ├── SymfonyMailerHandler.php
│   │       │       │   ├── SyslogHandler.php
│   │       │       │   ├── SyslogUdpHandler.php
│   │       │       │   ├── TelegramBotHandler.php
│   │       │       │   ├── TestHandler.php
│   │       │       │   ├── WebRequestRecognizerTrait.php
│   │       │       │   ├── WhatFailureGroupHandler.php
│   │       │       │   └── ZendMonitorHandler.php
│   │       │       ├── Processor
│   │       │       │   ├── ClosureContextProcessor.php
│   │       │       │   ├── GitProcessor.php
│   │       │       │   ├── HostnameProcessor.php
│   │       │       │   ├── IntrospectionProcessor.php
│   │       │       │   ├── LoadAverageProcessor.php
│   │       │       │   ├── MemoryPeakUsageProcessor.php
│   │       │       │   ├── MemoryProcessor.php
│   │       │       │   ├── MemoryUsageProcessor.php
│   │       │       │   ├── MercurialProcessor.php
│   │       │       │   ├── ProcessIdProcessor.php
│   │       │       │   ├── ProcessorInterface.php
│   │       │       │   ├── PsrLogMessageProcessor.php
│   │       │       │   ├── TagProcessor.php
│   │       │       │   ├── UidProcessor.php
│   │       │       │   └── WebProcessor.php
│   │       │       ├── Test
│   │       │       │   ├── MonologTestCase.php
│   │       │       │   └── TestCase.php
│   │       │       ├── DateTimeImmutable.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── JsonSerializableDateTimeImmutable.php
│   │       │       ├── Level.php
│   │       │       ├── Logger.php
│   │       │       ├── LogRecord.php
│   │       │       ├── Registry.php
│   │       │       ├── ResettableInterface.php
│   │       │       ├── SignalHandler.php
│   │       │       └── Utils.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── myclabs
│   │   └── deep-copy
│   │       ├── src
│   │       │   └── DeepCopy
│   │       │       ├── Exception
│   │       │       │   ├── CloneException.php
│   │       │       │   └── PropertyException.php
│   │       │       ├── Filter
│   │       │       │   ├── Doctrine
│   │       │       │   │   ├── DoctrineCollectionFilter.php
│   │       │       │   │   ├── DoctrineEmptyCollectionFilter.php
│   │       │       │   │   └── DoctrineProxyFilter.php
│   │       │       │   ├── ChainableFilter.php
│   │       │       │   ├── Filter.php
│   │       │       │   ├── KeepFilter.php
│   │       │       │   ├── ReplaceFilter.php
│   │       │       │   └── SetNullFilter.php
│   │       │       ├── Matcher
│   │       │       │   ├── Doctrine
│   │       │       │   │   └── DoctrineProxyMatcher.php
│   │       │       │   ├── Matcher.php
│   │       │       │   ├── PropertyMatcher.php
│   │       │       │   ├── PropertyNameMatcher.php
│   │       │       │   └── PropertyTypeMatcher.php
│   │       │       ├── Reflection
│   │       │       │   └── ReflectionHelper.php
│   │       │       ├── TypeFilter
│   │       │       │   ├── Date
│   │       │       │   │   ├── DateIntervalFilter.php
│   │       │       │   │   └── DatePeriodFilter.php
│   │       │       │   ├── Spl
│   │       │       │   │   ├── ArrayObjectFilter.php
│   │       │       │   │   ├── SplDoublyLinkedList.php
│   │       │       │   │   └── SplDoublyLinkedListFilter.php
│   │       │       │   ├── ReplaceFilter.php
│   │       │       │   ├── ShallowCopyFilter.php
│   │       │       │   └── TypeFilter.php
│   │       │       ├── TypeMatcher
│   │       │       │   └── TypeMatcher.php
│   │       │       ├── deep_copy.php
│   │       │       └── DeepCopy.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── nesbot
│   │   └── carbon
│   │       ├── bin
│   │       │   ├── carbon
│   │       │   └── carbon.bat
│   │       ├── lazy
│   │       │   └── Carbon
│   │       │       ├── MessageFormatter
│   │       │       │   ├── MessageFormatterMapperStrongType.php
│   │       │       │   └── MessageFormatterMapperWeakType.php
│   │       │       ├── ProtectedDatePeriod.php
│   │       │       ├── TranslatorStrongType.php
│   │       │       ├── TranslatorWeakType.php
│   │       │       └── UnprotectedDatePeriod.php
│   │       ├── src
│   │       │   └── Carbon
│   │       │       ├── Cli
│   │       │       │   └── Invoker.php
│   │       │       ├── Exceptions
│   │       │       │   ├── BadComparisonUnitException.php
│   │       │       │   ├── BadFluentConstructorException.php
│   │       │       │   ├── BadFluentSetterException.php
│   │       │       │   ├── BadMethodCallException.php
│   │       │       │   ├── EndLessPeriodException.php
│   │       │       │   ├── Exception.php
│   │       │       │   ├── ImmutableException.php
│   │       │       │   ├── InvalidArgumentException.php
│   │       │       │   ├── InvalidCastException.php
│   │       │       │   ├── InvalidDateException.php
│   │       │       │   ├── InvalidFormatException.php
│   │       │       │   ├── InvalidIntervalException.php
│   │       │       │   ├── InvalidPeriodDateException.php
│   │       │       │   ├── InvalidPeriodParameterException.php
│   │       │       │   ├── InvalidTimeZoneException.php
│   │       │       │   ├── InvalidTypeException.php
│   │       │       │   ├── NotACarbonClassException.php
│   │       │       │   ├── NotAPeriodException.php
│   │       │       │   ├── NotLocaleAwareException.php
│   │       │       │   ├── OutOfRangeException.php
│   │       │       │   ├── ParseErrorException.php
│   │       │       │   ├── RuntimeException.php
│   │       │       │   ├── UnitException.php
│   │       │       │   ├── UnitNotConfiguredException.php
│   │       │       │   ├── UnknownGetterException.php
│   │       │       │   ├── UnknownMethodException.php
│   │       │       │   ├── UnknownSetterException.php
│   │       │       │   ├── UnknownUnitException.php
│   │       │       │   ├── UnreachableException.php
│   │       │       │   └── UnsupportedUnitException.php
│   │       │       ├── Lang
│   │       │       │   ├── aa_DJ.php
│   │       │       │   ├── aa_ER.php
│   │       │       │   ├── aa_ER@saaho.php
│   │       │       │   ├── aa_ET.php
│   │       │       │   ├── aa.php
│   │       │       │   ├── af_NA.php
│   │       │       │   ├── af_ZA.php
│   │       │       │   ├── af.php
│   │       │       │   ├── agq.php
│   │       │       │   ├── agr_PE.php
│   │       │       │   ├── agr.php
│   │       │       │   ├── ak_GH.php
│   │       │       │   ├── ak.php
│   │       │       │   ├── am_ET.php
│   │       │       │   ├── am.php
│   │       │       │   ├── an_ES.php
│   │       │       │   ├── an.php
│   │       │       │   ├── anp_IN.php
│   │       │       │   ├── anp.php
│   │       │       │   ├── ar_AE.php
│   │       │       │   ├── ar_BH.php
│   │       │       │   ├── ar_DJ.php
│   │       │       │   ├── ar_DZ.php
│   │       │       │   ├── ar_EG.php
│   │       │       │   ├── ar_EH.php
│   │       │       │   ├── ar_ER.php
│   │       │       │   ├── ar_IL.php
│   │       │       │   ├── ar_IN.php
│   │       │       │   ├── ar_IQ.php
│   │       │       │   ├── ar_JO.php
│   │       │       │   ├── ar_KM.php
│   │       │       │   ├── ar_KW.php
│   │       │       │   ├── ar_LB.php
│   │       │       │   ├── ar_LY.php
│   │       │       │   ├── ar_MA.php
│   │       │       │   ├── ar_MR.php
│   │       │       │   ├── ar_OM.php
│   │       │       │   ├── ar_PS.php
│   │       │       │   ├── ar_QA.php
│   │       │       │   ├── ar_SA.php
│   │       │       │   ├── ar_SD.php
│   │       │       │   ├── ar_Shakl.php
│   │       │       │   ├── ar_SO.php
│   │       │       │   ├── ar_SS.php
│   │       │       │   ├── ar_SY.php
│   │       │       │   ├── ar_TD.php
│   │       │       │   ├── ar_TN.php
│   │       │       │   ├── ar_YE.php
│   │       │       │   ├── ar.php
│   │       │       │   ├── as_IN.php
│   │       │       │   ├── as.php
│   │       │       │   ├── asa.php
│   │       │       │   ├── ast_ES.php
│   │       │       │   ├── ast.php
│   │       │       │   ├── ayc_PE.php
│   │       │       │   ├── ayc.php
│   │       │       │   ├── az_AZ.php
│   │       │       │   ├── az_Cyrl.php
│   │       │       │   ├── az_IR.php
│   │       │       │   ├── az_Latn.php
│   │       │       │   ├── az.php
│   │       │       │   ├── bas.php
│   │       │       │   ├── be_BY.php
│   │       │       │   ├── be_BY@latin.php
│   │       │       │   ├── be.php
│   │       │       │   ├── bem_ZM.php
│   │       │       │   ├── bem.php
│   │       │       │   ├── ber_DZ.php
│   │       │       │   ├── ber_MA.php
│   │       │       │   ├── ber.php
│   │       │       │   ├── bez.php
│   │       │       │   ├── bg_BG.php
│   │       │       │   ├── bg.php
│   │       │       │   ├── bhb_IN.php
│   │       │       │   ├── bhb.php
│   │       │       │   ├── bho_IN.php
│   │       │       │   ├── bho.php
│   │       │       │   ├── bi_VU.php
│   │       │       │   ├── bi.php
│   │       │       │   ├── bm.php
│   │       │       │   ├── bn_BD.php
│   │       │       │   ├── bn_IN.php
│   │       │       │   ├── bn.php
│   │       │       │   ├── bo_CN.php
│   │       │       │   ├── bo_IN.php
│   │       │       │   ├── bo.php
│   │       │       │   ├── br_FR.php
│   │       │       │   ├── br.php
│   │       │       │   ├── brx_IN.php
│   │       │       │   ├── brx.php
│   │       │       │   ├── bs_BA.php
│   │       │       │   ├── bs_Cyrl.php
│   │       │       │   ├── bs_Latn.php
│   │       │       │   ├── bs.php
│   │       │       │   ├── byn_ER.php
│   │       │       │   ├── byn.php
│   │       │       │   ├── ca_AD.php
│   │       │       │   ├── ca_ES_Valencia.php
│   │       │       │   ├── ca_ES.php
│   │       │       │   ├── ca_FR.php
│   │       │       │   ├── ca_IT.php
│   │       │       │   ├── ca.php
│   │       │       │   ├── ccp_IN.php
│   │       │       │   ├── ccp.php
│   │       │       │   ├── ce_RU.php
│   │       │       │   ├── ce.php
│   │       │       │   ├── cgg.php
│   │       │       │   ├── chr_US.php
│   │       │       │   ├── chr.php
│   │       │       │   ├── ckb.php
│   │       │       │   ├── cmn_TW.php
│   │       │       │   ├── cmn.php
│   │       │       │   ├── crh_UA.php
│   │       │       │   ├── crh.php
│   │       │       │   ├── cs_CZ.php
│   │       │       │   ├── cs.php
│   │       │       │   ├── csb_PL.php
│   │       │       │   ├── csb.php
│   │       │       │   ├── cu.php
│   │       │       │   ├── cv_RU.php
│   │       │       │   ├── cv.php
│   │       │       │   ├── cy_GB.php
│   │       │       │   ├── cy.php
│   │       │       │   ├── da_DK.php
│   │       │       │   ├── da_GL.php
│   │       │       │   ├── da.php
│   │       │       │   ├── dav.php
│   │       │       │   ├── de_AT.php
│   │       │       │   ├── de_BE.php
│   │       │       │   ├── de_CH.php
│   │       │       │   ├── de_DE.php
│   │       │       │   ├── de_IT.php
│   │       │       │   ├── de_LI.php
│   │       │       │   ├── de_LU.php
│   │       │       │   ├── de.php
│   │       │       │   ├── dje.php
│   │       │       │   ├── doi_IN.php
│   │       │       │   ├── doi.php
│   │       │       │   ├── dsb_DE.php
│   │       │       │   ├── dsb.php
│   │       │       │   ├── dua.php
│   │       │       │   ├── dv_MV.php
│   │       │       │   ├── dv.php
│   │       │       │   ├── dyo.php
│   │       │       │   ├── dz_BT.php
│   │       │       │   ├── dz.php
│   │       │       │   ├── ebu.php
│   │       │       │   ├── ee_TG.php
│   │       │       │   ├── ee.php
│   │       │       │   ├── el_CY.php
│   │       │       │   ├── el_GR.php
│   │       │       │   ├── el.php
│   │       │       │   ├── en_001.php
│   │       │       │   ├── en_150.php
│   │       │       │   ├── en_AG.php
│   │       │       │   ├── en_AI.php
│   │       │       │   ├── en_AS.php
│   │       │       │   ├── en_AT.php
│   │       │       │   ├── en_AU.php
│   │       │       │   ├── en_BB.php
│   │       │       │   ├── en_BE.php
│   │       │       │   ├── en_BI.php
│   │       │       │   ├── en_BM.php
│   │       │       │   ├── en_BS.php
│   │       │       │   ├── en_BW.php
│   │       │       │   ├── en_BZ.php
│   │       │       │   ├── en_CA.php
│   │       │       │   ├── en_CC.php
│   │       │       │   ├── en_CH.php
│   │       │       │   ├── en_CK.php
│   │       │       │   ├── en_CM.php
│   │       │       │   ├── en_CX.php
│   │       │       │   ├── en_CY.php
│   │       │       │   ├── en_DE.php
│   │       │       │   ├── en_DG.php
│   │       │       │   ├── en_DK.php
│   │       │       │   ├── en_DM.php
│   │       │       │   ├── en_ER.php
│   │       │       │   ├── en_FI.php
│   │       │       │   ├── en_FJ.php
│   │       │       │   ├── en_FK.php
│   │       │       │   ├── en_FM.php
│   │       │       │   ├── en_GB.php
│   │       │       │   ├── en_GD.php
│   │       │       │   ├── en_GG.php
│   │       │       │   ├── en_GH.php
│   │       │       │   ├── en_GI.php
│   │       │       │   ├── en_GM.php
│   │       │       │   ├── en_GU.php
│   │       │       │   ├── en_GY.php
│   │       │       │   ├── en_HK.php
│   │       │       │   ├── en_IE.php
│   │       │       │   ├── en_IL.php
│   │       │       │   ├── en_IM.php
│   │       │       │   ├── en_IN.php
│   │       │       │   ├── en_IO.php
│   │       │       │   ├── en_ISO.php
│   │       │       │   ├── en_JE.php
│   │       │       │   ├── en_JM.php
│   │       │       │   ├── en_KE.php
│   │       │       │   ├── en_KI.php
│   │       │       │   ├── en_KN.php
│   │       │       │   ├── en_KY.php
│   │       │       │   ├── en_LC.php
│   │       │       │   ├── en_LR.php
│   │       │       │   ├── en_LS.php
│   │       │       │   ├── en_MG.php
│   │       │       │   ├── en_MH.php
│   │       │       │   ├── en_MO.php
│   │       │       │   ├── en_MP.php
│   │       │       │   ├── en_MS.php
│   │       │       │   ├── en_MT.php
│   │       │       │   ├── en_MU.php
│   │       │       │   ├── en_MW.php
│   │       │       │   ├── en_MY.php
│   │       │       │   ├── en_NA.php
│   │       │       │   ├── en_NF.php
│   │       │       │   ├── en_NG.php
│   │       │       │   ├── en_NL.php
│   │       │       │   ├── en_NR.php
│   │       │       │   ├── en_NU.php
│   │       │       │   ├── en_NZ.php
│   │       │       │   ├── en_PG.php
│   │       │       │   ├── en_PH.php
│   │       │       │   ├── en_PK.php
│   │       │       │   ├── en_PN.php
│   │       │       │   ├── en_PR.php
│   │       │       │   ├── en_PW.php
│   │       │       │   ├── en_RW.php
│   │       │       │   ├── en_SB.php
│   │       │       │   ├── en_SC.php
│   │       │       │   ├── en_SD.php
│   │       │       │   ├── en_SE.php
│   │       │       │   ├── en_SG.php
│   │       │       │   ├── en_SH.php
│   │       │       │   ├── en_SI.php
│   │       │       │   ├── en_SL.php
│   │       │       │   ├── en_SS.php
│   │       │       │   ├── en_SX.php
│   │       │       │   ├── en_SZ.php
│   │       │       │   ├── en_TC.php
│   │       │       │   ├── en_TK.php
│   │       │       │   ├── en_TO.php
│   │       │       │   ├── en_TT.php
│   │       │       │   ├── en_TV.php
│   │       │       │   ├── en_TZ.php
│   │       │       │   ├── en_UG.php
│   │       │       │   ├── en_UM.php
│   │       │       │   ├── en_US_Posix.php
│   │       │       │   ├── en_US.php
│   │       │       │   ├── en_VC.php
│   │       │       │   ├── en_VG.php
│   │       │       │   ├── en_VI.php
│   │       │       │   ├── en_VU.php
│   │       │       │   ├── en_WS.php
│   │       │       │   ├── en_ZA.php
│   │       │       │   ├── en_ZM.php
│   │       │       │   ├── en_ZW.php
│   │       │       │   ├── en.php
│   │       │       │   ├── eo.php
│   │       │       │   ├── es_419.php
│   │       │       │   ├── es_AR.php
│   │       │       │   ├── es_BO.php
│   │       │       │   ├── es_BR.php
│   │       │       │   ├── es_BZ.php
│   │       │       │   ├── es_CL.php
│   │       │       │   ├── es_CO.php
│   │       │       │   ├── es_CR.php
│   │       │       │   ├── es_CU.php
│   │       │       │   ├── es_DO.php
│   │       │       │   ├── es_EA.php
│   │       │       │   ├── es_EC.php
│   │       │       │   ├── es_ES.php
│   │       │       │   ├── es_GQ.php
│   │       │       │   ├── es_GT.php
│   │       │       │   ├── es_HN.php
│   │       │       │   ├── es_IC.php
│   │       │       │   ├── es_MX.php
│   │       │       │   ├── es_NI.php
│   │       │       │   ├── es_PA.php
│   │       │       │   ├── es_PE.php
│   │       │       │   ├── es_PH.php
│   │       │       │   ├── es_PR.php
│   │       │       │   ├── es_PY.php
│   │       │       │   ├── es_SV.php
│   │       │       │   ├── es_US.php
│   │       │       │   ├── es_UY.php
│   │       │       │   ├── es_VE.php
│   │       │       │   ├── es.php
│   │       │       │   ├── et_EE.php
│   │       │       │   ├── et.php
│   │       │       │   ├── eu_ES.php
│   │       │       │   ├── eu.php
│   │       │       │   ├── ewo.php
│   │       │       │   ├── fa_AF.php
│   │       │       │   ├── fa_IR.php
│   │       │       │   ├── fa.php
│   │       │       │   ├── ff_CM.php
│   │       │       │   ├── ff_GN.php
│   │       │       │   ├── ff_MR.php
│   │       │       │   ├── ff_SN.php
│   │       │       │   ├── ff.php
│   │       │       │   ├── fi_FI.php
│   │       │       │   ├── fi.php
│   │       │       │   ├── fil_PH.php
│   │       │       │   ├── fil.php
│   │       │       │   ├── fo_DK.php
│   │       │       │   ├── fo_FO.php
│   │       │       │   ├── fo.php
│   │       │       │   ├── fr_BE.php
│   │       │       │   ├── fr_BF.php
│   │       │       │   ├── fr_BI.php
│   │       │       │   ├── fr_BJ.php
│   │       │       │   ├── fr_BL.php
│   │       │       │   ├── fr_CA.php
│   │       │       │   ├── fr_CD.php
│   │       │       │   ├── fr_CF.php
│   │       │       │   ├── fr_CG.php
│   │       │       │   ├── fr_CH.php
│   │       │       │   ├── fr_CI.php
│   │       │       │   ├── fr_CM.php
│   │       │       │   ├── fr_DJ.php
│   │       │       │   ├── fr_DZ.php
│   │       │       │   ├── fr_FR.php
│   │       │       │   ├── fr_GA.php
│   │       │       │   ├── fr_GF.php
│   │       │       │   ├── fr_GN.php
│   │       │       │   ├── fr_GP.php
│   │       │       │   ├── fr_GQ.php
│   │       │       │   ├── fr_HT.php
│   │       │       │   ├── fr_KM.php
│   │       │       │   ├── fr_LU.php
│   │       │       │   ├── fr_MA.php
│   │       │       │   ├── fr_MC.php
│   │       │       │   ├── fr_MF.php
│   │       │       │   ├── fr_MG.php
│   │       │       │   ├── fr_ML.php
│   │       │       │   ├── fr_MQ.php
│   │       │       │   ├── fr_MR.php
│   │       │       │   ├── fr_MU.php
│   │       │       │   ├── fr_NC.php
│   │       │       │   ├── fr_NE.php
│   │       │       │   ├── fr_PF.php
│   │       │       │   ├── fr_PM.php
│   │       │       │   ├── fr_RE.php
│   │       │       │   ├── fr_RW.php
│   │       │       │   ├── fr_SC.php
│   │       │       │   ├── fr_SN.php
│   │       │       │   ├── fr_SY.php
│   │       │       │   ├── fr_TD.php
│   │       │       │   ├── fr_TG.php
│   │       │       │   ├── fr_TN.php
│   │       │       │   ├── fr_VU.php
│   │       │       │   ├── fr_WF.php
│   │       │       │   ├── fr_YT.php
│   │       │       │   ├── fr.php
│   │       │       │   ├── fur_IT.php
│   │       │       │   ├── fur.php
│   │       │       │   ├── fy_DE.php
│   │       │       │   ├── fy_NL.php
│   │       │       │   ├── fy.php
│   │       │       │   ├── ga_IE.php
│   │       │       │   ├── ga.php
│   │       │       │   ├── gd_GB.php
│   │       │       │   ├── gd.php
│   │       │       │   ├── gez_ER.php
│   │       │       │   ├── gez_ET.php
│   │       │       │   ├── gez.php
│   │       │       │   ├── gl_ES.php
│   │       │       │   ├── gl.php
│   │       │       │   ├── gom_Latn.php
│   │       │       │   ├── gom.php
│   │       │       │   ├── gsw_CH.php
│   │       │       │   ├── gsw_FR.php
│   │       │       │   ├── gsw_LI.php
│   │       │       │   ├── gsw.php
│   │       │       │   ├── gu_IN.php
│   │       │       │   ├── gu.php
│   │       │       │   ├── guz.php
│   │       │       │   ├── gv_GB.php
│   │       │       │   ├── gv.php
│   │       │       │   ├── ha_GH.php
│   │       │       │   ├── ha_NE.php
│   │       │       │   ├── ha_NG.php
│   │       │       │   ├── ha.php
│   │       │       │   ├── hak_TW.php
│   │       │       │   ├── hak.php
│   │       │       │   ├── haw.php
│   │       │       │   ├── he_IL.php
│   │       │       │   ├── he.php
│   │       │       │   ├── hi_IN.php
│   │       │       │   ├── hi.php
│   │       │       │   ├── hif_FJ.php
│   │       │       │   ├── hif.php
│   │       │       │   ├── hne_IN.php
│   │       │       │   ├── hne.php
│   │       │       │   ├── hr_BA.php
│   │       │       │   ├── hr_HR.php
│   │       │       │   ├── hr.php
│   │       │       │   ├── hsb_DE.php
│   │       │       │   ├── hsb.php
│   │       │       │   ├── ht_HT.php
│   │       │       │   ├── ht.php
│   │       │       │   ├── hu_HU.php
│   │       │       │   ├── hu.php
│   │       │       │   ├── hy_AM.php
│   │       │       │   ├── hy.php
│   │       │       │   ├── i18n.php
│   │       │       │   ├── ia_FR.php
│   │       │       │   ├── ia.php
│   │       │       │   ├── id_ID.php
│   │       │       │   ├── id.php
│   │       │       │   ├── ig_NG.php
│   │       │       │   ├── ig.php
│   │       │       │   ├── ii.php
│   │       │       │   ├── ik_CA.php
│   │       │       │   ├── ik.php
│   │       │       │   ├── in.php
│   │       │       │   ├── is_IS.php
│   │       │       │   ├── is.php
│   │       │       │   ├── it_CH.php
│   │       │       │   ├── it_IT.php
│   │       │       │   ├── it_SM.php
│   │       │       │   ├── it_VA.php
│   │       │       │   ├── it.php
│   │       │       │   ├── iu_CA.php
│   │       │       │   ├── iu.php
│   │       │       │   ├── iw.php
│   │       │       │   ├── ja_JP.php
│   │       │       │   ├── ja.php
│   │       │       │   ├── jgo.php
│   │       │       │   ├── jmc.php
│   │       │       │   ├── jv.php
│   │       │       │   ├── ka_GE.php
│   │       │       │   ├── ka.php
│   │       │       │   ├── kab_DZ.php
│   │       │       │   ├── kab.php
│   │       │       │   ├── kam.php
│   │       │       │   ├── kde.php
│   │       │       │   ├── kea.php
│   │       │       │   ├── khq.php
│   │       │       │   ├── ki.php
│   │       │       │   ├── kk_KZ.php
│   │       │       │   ├── kk.php
│   │       │       │   ├── kkj.php
│   │       │       │   ├── kl_GL.php
│   │       │       │   ├── kl.php
│   │       │       │   ├── kln.php
│   │       │       │   ├── km_KH.php
│   │       │       │   ├── km.php
│   │       │       │   ├── kn_IN.php
│   │       │       │   ├── kn.php
│   │       │       │   ├── ko_KP.php
│   │       │       │   ├── ko_KR.php
│   │       │       │   ├── ko.php
│   │       │       │   ├── kok_IN.php
│   │       │       │   ├── kok.php
│   │       │       │   ├── ks_IN.php
│   │       │       │   ├── ks_IN@devanagari.php
│   │       │       │   ├── ks.php
│   │       │       │   ├── ksb.php
│   │       │       │   ├── ksf.php
│   │       │       │   ├── ksh.php
│   │       │       │   ├── ku_TR.php
│   │       │       │   ├── ku.php
│   │       │       │   ├── kw_GB.php
│   │       │       │   ├── kw.php
│   │       │       │   ├── ky_KG.php
│   │       │       │   ├── ky.php
│   │       │       │   ├── lag.php
│   │       │       │   ├── lb_LU.php
│   │       │       │   ├── lb.php
│   │       │       │   ├── lg_UG.php
│   │       │       │   ├── lg.php
│   │       │       │   ├── li_NL.php
│   │       │       │   ├── li.php
│   │       │       │   ├── lij_IT.php
│   │       │       │   ├── lij.php
│   │       │       │   ├── lkt.php
│   │       │       │   ├── ln_AO.php
│   │       │       │   ├── ln_CD.php
│   │       │       │   ├── ln_CF.php
│   │       │       │   ├── ln_CG.php
│   │       │       │   ├── ln.php
│   │       │       │   ├── lo_LA.php
│   │       │       │   ├── lo.php
│   │       │       │   ├── lrc_IQ.php
│   │       │       │   ├── lrc.php
│   │       │       │   ├── lt_LT.php
│   │       │       │   ├── lt.php
│   │       │       │   ├── lu.php
│   │       │       │   ├── luo.php
│   │       │       │   ├── luy.php
│   │       │       │   ├── lv_LV.php
│   │       │       │   ├── lv.php
│   │       │       │   ├── lzh_TW.php
│   │       │       │   ├── lzh.php
│   │       │       │   ├── mag_IN.php
│   │       │       │   ├── mag.php
│   │       │       │   ├── mai_IN.php
│   │       │       │   ├── mai.php
│   │       │       │   ├── mas_TZ.php
│   │       │       │   ├── mas.php
│   │       │       │   ├── mer.php
│   │       │       │   ├── mfe_MU.php
│   │       │       │   ├── mfe.php
│   │       │       │   ├── mg_MG.php
│   │       │       │   ├── mg.php
│   │       │       │   ├── mgh.php
│   │       │       │   ├── mgo.php
│   │       │       │   ├── mhr_RU.php
│   │       │       │   ├── mhr.php
│   │       │       │   ├── mi_NZ.php
│   │       │       │   ├── mi.php
│   │       │       │   ├── miq_NI.php
│   │       │       │   ├── miq.php
│   │       │       │   ├── mjw_IN.php
│   │       │       │   ├── mjw.php
│   │       │       │   ├── mk_MK.php
│   │       │       │   ├── mk.php
│   │       │       │   ├── ml_IN.php
│   │       │       │   ├── ml.php
│   │       │       │   ├── mn_MN.php
│   │       │       │   ├── mn.php
│   │       │       │   ├── mni_IN.php
│   │       │       │   ├── mni.php
│   │       │       │   ├── mo.php
│   │       │       │   ├── mr_IN.php
│   │       │       │   ├── mr.php
│   │       │       │   ├── ms_BN.php
│   │       │       │   ├── ms_MY.php
│   │       │       │   ├── ms_SG.php
│   │       │       │   ├── ms.php
│   │       │       │   ├── mt_MT.php
│   │       │       │   ├── mt.php
│   │       │       │   ├── mua.php
│   │       │       │   ├── my_MM.php
│   │       │       │   ├── my.php
│   │       │       │   ├── mzn.php
│   │       │       │   ├── nan_TW.php
│   │       │       │   ├── nan_TW@latin.php
│   │       │       │   ├── nan.php
│   │       │       │   ├── naq.php
│   │       │       │   ├── nb_NO.php
│   │       │       │   ├── nb_SJ.php
│   │       │       │   ├── nb.php
│   │       │       │   ├── nd.php
│   │       │       │   ├── nds_DE.php
│   │       │       │   ├── nds_NL.php
│   │       │       │   ├── nds.php
│   │       │       │   ├── ne_IN.php
│   │       │       │   ├── ne_NP.php
│   │       │       │   ├── ne.php
│   │       │       │   ├── nhn_MX.php
│   │       │       │   ├── nhn.php
│   │       │       │   ├── niu_NU.php
│   │       │       │   ├── niu.php
│   │       │       │   ├── nl_AW.php
│   │       │       │   ├── nl_BE.php
│   │       │       │   ├── nl_BQ.php
│   │       │       │   ├── nl_CW.php
│   │       │       │   ├── nl_NL.php
│   │       │       │   ├── nl_SR.php
│   │       │       │   ├── nl_SX.php
│   │       │       │   ├── nl.php
│   │       │       │   ├── nmg.php
│   │       │       │   ├── nn_NO.php
│   │       │       │   ├── nn.php
│   │       │       │   ├── nnh.php
│   │       │       │   ├── no.php
│   │       │       │   ├── nr_ZA.php
│   │       │       │   ├── nr.php
│   │       │       │   ├── nso_ZA.php
│   │       │       │   ├── nso.php
│   │       │       │   ├── nus.php
│   │       │       │   ├── nyn.php
│   │       │       │   ├── oc_FR.php
│   │       │       │   ├── oc.php
│   │       │       │   ├── om_ET.php
│   │       │       │   ├── om_KE.php
│   │       │       │   ├── om.php
│   │       │       │   ├── or_IN.php
│   │       │       │   ├── or.php
│   │       │       │   ├── os_RU.php
│   │       │       │   ├── os.php
│   │       │       │   ├── pa_Arab.php
│   │       │       │   ├── pa_Guru.php
│   │       │       │   ├── pa_IN.php
│   │       │       │   ├── pa_PK.php
│   │       │       │   ├── pa.php
│   │       │       │   ├── pap_AW.php
│   │       │       │   ├── pap_CW.php
│   │       │       │   ├── pap.php
│   │       │       │   ├── pl_PL.php
│   │       │       │   ├── pl.php
│   │       │       │   ├── prg.php
│   │       │       │   ├── ps_AF.php
│   │       │       │   ├── ps.php
│   │       │       │   ├── pt_AO.php
│   │       │       │   ├── pt_BR.php
│   │       │       │   ├── pt_CH.php
│   │       │       │   ├── pt_CV.php
│   │       │       │   ├── pt_GQ.php
│   │       │       │   ├── pt_GW.php
│   │       │       │   ├── pt_LU.php
│   │       │       │   ├── pt_MO.php
│   │       │       │   ├── pt_MZ.php
│   │       │       │   ├── pt_PT.php
│   │       │       │   ├── pt_ST.php
│   │       │       │   ├── pt_TL.php
│   │       │       │   ├── pt.php
│   │       │       │   ├── qu_BO.php
│   │       │       │   ├── qu_EC.php
│   │       │       │   ├── qu.php
│   │       │       │   ├── quz_PE.php
│   │       │       │   ├── quz.php
│   │       │       │   ├── raj_IN.php
│   │       │       │   ├── raj.php
│   │       │       │   ├── rm.php
│   │       │       │   ├── rn.php
│   │       │       │   ├── ro_MD.php
│   │       │       │   ├── ro_RO.php
│   │       │       │   ├── ro.php
│   │       │       │   ├── rof.php
│   │       │       │   ├── ru_BY.php
│   │       │       │   ├── ru_KG.php
│   │       │       │   ├── ru_KZ.php
│   │       │       │   ├── ru_MD.php
│   │       │       │   ├── ru_RU.php
│   │       │       │   ├── ru_UA.php
│   │       │       │   ├── ru.php
│   │       │       │   ├── rw_RW.php
│   │       │       │   ├── rw.php
│   │       │       │   ├── rwk.php
│   │       │       │   ├── sa_IN.php
│   │       │       │   ├── sa.php
│   │       │       │   ├── sah_RU.php
│   │       │       │   ├── sah.php
│   │       │       │   ├── saq.php
│   │       │       │   ├── sat_IN.php
│   │       │       │   ├── sat.php
│   │       │       │   ├── sbp.php
│   │       │       │   ├── sc_IT.php
│   │       │       │   ├── sc.php
│   │       │       │   ├── sd_IN.php
│   │       │       │   ├── sd_IN@devanagari.php
│   │       │       │   ├── sd.php
│   │       │       │   ├── se_FI.php
│   │       │       │   ├── se_NO.php
│   │       │       │   ├── se_SE.php
│   │       │       │   ├── se.php
│   │       │       │   ├── seh.php
│   │       │       │   ├── ses.php
│   │       │       │   ├── sg.php
│   │       │       │   ├── sgs_LT.php
│   │       │       │   ├── sgs.php
│   │       │       │   ├── sh.php
│   │       │       │   ├── shi_Latn.php
│   │       │       │   ├── shi_Tfng.php
│   │       │       │   ├── shi.php
│   │       │       │   ├── shn_MM.php
│   │       │       │   ├── shn.php
│   │       │       │   ├── shs_CA.php
│   │       │       │   ├── shs.php
│   │       │       │   ├── si_LK.php
│   │       │       │   ├── si.php
│   │       │       │   ├── sid_ET.php
│   │       │       │   ├── sid.php
│   │       │       │   ├── sk_SK.php
│   │       │       │   ├── sk.php
│   │       │       │   ├── sl_SI.php
│   │       │       │   ├── sl.php
│   │       │       │   ├── sm_WS.php
│   │       │       │   ├── sm.php
│   │       │       │   ├── smn.php
│   │       │       │   ├── sn.php
│   │       │       │   ├── so_DJ.php
│   │       │       │   ├── so_ET.php
│   │       │       │   ├── so_KE.php
│   │       │       │   ├── so_SO.php
│   │       │       │   ├── so.php
│   │       │       │   ├── sq_AL.php
│   │       │       │   ├── sq_MK.php
│   │       │       │   ├── sq_XK.php
│   │       │       │   ├── sq.php
│   │       │       │   ├── sr_Cyrl_BA.php
│   │       │       │   ├── sr_Cyrl_ME.php
│   │       │       │   ├── sr_Cyrl_XK.php
│   │       │       │   ├── sr_Cyrl.php
│   │       │       │   ├── sr_Latn_BA.php
│   │       │       │   ├── sr_Latn_ME.php
│   │       │       │   ├── sr_Latn_XK.php
│   │       │       │   ├── sr_Latn.php
│   │       │       │   ├── sr_ME.php
│   │       │       │   ├── sr_RS.php
│   │       │       │   ├── sr_RS@latin.php
│   │       │       │   ├── sr.php
│   │       │       │   ├── ss_ZA.php
│   │       │       │   ├── ss.php
│   │       │       │   ├── st_ZA.php
│   │       │       │   ├── st.php
│   │       │       │   ├── sv_AX.php
│   │       │       │   ├── sv_FI.php
│   │       │       │   ├── sv_SE.php
│   │       │       │   ├── sv.php
│   │       │       │   ├── sw_CD.php
│   │       │       │   ├── sw_KE.php
│   │       │       │   ├── sw_TZ.php
│   │       │       │   ├── sw_UG.php
│   │       │       │   ├── sw.php
│   │       │       │   ├── szl_PL.php
│   │       │       │   ├── szl.php
│   │       │       │   ├── ta_IN.php
│   │       │       │   ├── ta_LK.php
│   │       │       │   ├── ta_MY.php
│   │       │       │   ├── ta_SG.php
│   │       │       │   ├── ta.php
│   │       │       │   ├── tcy_IN.php
│   │       │       │   ├── tcy.php
│   │       │       │   ├── te_IN.php
│   │       │       │   ├── te.php
│   │       │       │   ├── teo_KE.php
│   │       │       │   ├── teo.php
│   │       │       │   ├── tet.php
│   │       │       │   ├── tg_TJ.php
│   │       │       │   ├── tg.php
│   │       │       │   ├── th_TH.php
│   │       │       │   ├── th.php
│   │       │       │   ├── the_NP.php
│   │       │       │   ├── the.php
│   │       │       │   ├── ti_ER.php
│   │       │       │   ├── ti_ET.php
│   │       │       │   ├── ti.php
│   │       │       │   ├── tig_ER.php
│   │       │       │   ├── tig.php
│   │       │       │   ├── tk_TM.php
│   │       │       │   ├── tk.php
│   │       │       │   ├── tl_PH.php
│   │       │       │   ├── tl.php
│   │       │       │   ├── tlh.php
│   │       │       │   ├── tn_ZA.php
│   │       │       │   ├── tn.php
│   │       │       │   ├── to_TO.php
│   │       │       │   ├── to.php
│   │       │       │   ├── tpi_PG.php
│   │       │       │   ├── tpi.php
│   │       │       │   ├── tr_CY.php
│   │       │       │   ├── tr_TR.php
│   │       │       │   ├── tr.php
│   │       │       │   ├── ts_ZA.php
│   │       │       │   ├── ts.php
│   │       │       │   ├── tt_RU.php
│   │       │       │   ├── tt_RU@iqtelif.php
│   │       │       │   ├── tt.php
│   │       │       │   ├── twq.php
│   │       │       │   ├── tzl.php
│   │       │       │   ├── tzm_Latn.php
│   │       │       │   ├── tzm.php
│   │       │       │   ├── ug_CN.php
│   │       │       │   ├── ug.php
│   │       │       │   ├── uk_UA.php
│   │       │       │   ├── uk.php
│   │       │       │   ├── unm_US.php
│   │       │       │   ├── unm.php
│   │       │       │   ├── ur_IN.php
│   │       │       │   ├── ur_PK.php
│   │       │       │   ├── ur.php
│   │       │       │   ├── uz_Arab.php
│   │       │       │   ├── uz_Cyrl.php
│   │       │       │   ├── uz_Latn.php
│   │       │       │   ├── uz_UZ.php
│   │       │       │   ├── uz_UZ@cyrillic.php
│   │       │       │   ├── uz.php
│   │       │       │   ├── vai_Latn.php
│   │       │       │   ├── vai_Vaii.php
│   │       │       │   ├── vai.php
│   │       │       │   ├── ve_ZA.php
│   │       │       │   ├── ve.php
│   │       │       │   ├── vi_VN.php
│   │       │       │   ├── vi.php
│   │       │       │   ├── vo.php
│   │       │       │   ├── vun.php
│   │       │       │   ├── wa_BE.php
│   │       │       │   ├── wa.php
│   │       │       │   ├── wae_CH.php
│   │       │       │   ├── wae.php
│   │       │       │   ├── wal_ET.php
│   │       │       │   ├── wal.php
│   │       │       │   ├── wo_SN.php
│   │       │       │   ├── wo.php
│   │       │       │   ├── xh_ZA.php
│   │       │       │   ├── xh.php
│   │       │       │   ├── xog.php
│   │       │       │   ├── yav.php
│   │       │       │   ├── yi_US.php
│   │       │       │   ├── yi.php
│   │       │       │   ├── yo_BJ.php
│   │       │       │   ├── yo_NG.php
│   │       │       │   ├── yo.php
│   │       │       │   ├── yue_Hans.php
│   │       │       │   ├── yue_Hant.php
│   │       │       │   ├── yue_HK.php
│   │       │       │   ├── yue.php
│   │       │       │   ├── yuw_PG.php
│   │       │       │   ├── yuw.php
│   │       │       │   ├── zgh.php
│   │       │       │   ├── zh_CN.php
│   │       │       │   ├── zh_Hans_HK.php
│   │       │       │   ├── zh_Hans_MO.php
│   │       │       │   ├── zh_Hans_SG.php
│   │       │       │   ├── zh_Hans.php
│   │       │       │   ├── zh_Hant_HK.php
│   │       │       │   ├── zh_Hant_MO.php
│   │       │       │   ├── zh_Hant_TW.php
│   │       │       │   ├── zh_Hant.php
│   │       │       │   ├── zh_HK.php
│   │       │       │   ├── zh_MO.php
│   │       │       │   ├── zh_SG.php
│   │       │       │   ├── zh_TW.php
│   │       │       │   ├── zh_YUE.php
│   │       │       │   ├── zh.php
│   │       │       │   ├── zu_ZA.php
│   │       │       │   └── zu.php
│   │       │       ├── Laravel
│   │       │       │   └── ServiceProvider.php
│   │       │       ├── List
│   │       │       │   ├── languages.php
│   │       │       │   └── regions.php
│   │       │       ├── MessageFormatter
│   │       │       │   └── MessageFormatterMapper.php
│   │       │       ├── PHPStan
│   │       │       │   ├── MacroExtension.php
│   │       │       │   └── MacroMethodReflection.php
│   │       │       ├── Traits
│   │       │       │   ├── Boundaries.php
│   │       │       │   ├── Cast.php
│   │       │       │   ├── Comparison.php
│   │       │       │   ├── Converter.php
│   │       │       │   ├── Creator.php
│   │       │       │   ├── Date.php
│   │       │       │   ├── DeprecatedPeriodProperties.php
│   │       │       │   ├── Difference.php
│   │       │       │   ├── IntervalRounding.php
│   │       │       │   ├── IntervalStep.php
│   │       │       │   ├── LocalFactory.php
│   │       │       │   ├── Localization.php
│   │       │       │   ├── Macro.php
│   │       │       │   ├── MagicParameter.php
│   │       │       │   ├── Mixin.php
│   │       │       │   ├── Modifiers.php
│   │       │       │   ├── Mutability.php
│   │       │       │   ├── ObjectInitialisation.php
│   │       │       │   ├── Options.php
│   │       │       │   ├── Rounding.php
│   │       │       │   ├── Serialization.php
│   │       │       │   ├── StaticLocalization.php
│   │       │       │   ├── StaticOptions.php
│   │       │       │   ├── Test.php
│   │       │       │   ├── Timestamp.php
│   │       │       │   ├── ToStringFormat.php
│   │       │       │   ├── Units.php
│   │       │       │   └── Week.php
│   │       │       ├── AbstractTranslator.php
│   │       │       ├── Callback.php
│   │       │       ├── Carbon.php
│   │       │       ├── CarbonConverterInterface.php
│   │       │       ├── CarbonImmutable.php
│   │       │       ├── CarbonInterface.php
│   │       │       ├── CarbonInterval.php
│   │       │       ├── CarbonPeriod.php
│   │       │       ├── CarbonPeriodImmutable.php
│   │       │       ├── CarbonTimeZone.php
│   │       │       ├── Factory.php
│   │       │       ├── FactoryImmutable.php
│   │       │       ├── Language.php
│   │       │       ├── Month.php
│   │       │       ├── Translator.php
│   │       │       ├── TranslatorImmutable.php
│   │       │       ├── TranslatorStrongTypeInterface.php
│   │       │       ├── Unit.php
│   │       │       ├── WeekDay.php
│   │       │       └── WrapperClock.php
│   │       ├── .phpstorm.meta.php
│   │       ├── composer.json
│   │       ├── extension.neon
│   │       ├── LICENSE
│   │       ├── readme.md
│   │       └── sponsors.php
│   ├── nette
│   │   ├── schema
│   │   │   ├── src
│   │   │   │   └── Schema
│   │   │   │       ├── Elements
│   │   │   │       │   ├── AnyOf.php
│   │   │   │       │   ├── Base.php
│   │   │   │       │   ├── Structure.php
│   │   │   │       │   └── Type.php
│   │   │   │       ├── Context.php
│   │   │   │       ├── DynamicParameter.php
│   │   │   │       ├── Expect.php
│   │   │   │       ├── Helpers.php
│   │   │   │       ├── Message.php
│   │   │   │       ├── Processor.php
│   │   │   │       ├── Schema.php
│   │   │   │       └── ValidationException.php
│   │   │   ├── composer.json
│   │   │   ├── license.md
│   │   │   └── readme.md
│   │   └── utils
│   │       ├── src
│   │       │   ├── Iterators
│   │       │   │   ├── CachingIterator.php
│   │       │   │   └── Mapper.php
│   │       │   ├── Utils
│   │       │   │   ├── ArrayHash.php
│   │       │   │   ├── ArrayList.php
│   │       │   │   ├── Arrays.php
│   │       │   │   ├── Callback.php
│   │       │   │   ├── DateTime.php
│   │       │   │   ├── exceptions.php
│   │       │   │   ├── FileInfo.php
│   │       │   │   ├── FileSystem.php
│   │       │   │   ├── Finder.php
│   │       │   │   ├── Floats.php
│   │       │   │   ├── Helpers.php
│   │       │   │   ├── Html.php
│   │       │   │   ├── Image.php
│   │       │   │   ├── ImageColor.php
│   │       │   │   ├── ImageType.php
│   │       │   │   ├── Iterables.php
│   │       │   │   ├── Json.php
│   │       │   │   ├── ObjectHelpers.php
│   │       │   │   ├── Paginator.php
│   │       │   │   ├── Random.php
│   │       │   │   ├── Reflection.php
│   │       │   │   ├── ReflectionMethod.php
│   │       │   │   ├── Strings.php
│   │       │   │   ├── Type.php
│   │       │   │   └── Validators.php
│   │       │   ├── compatibility.php
│   │       │   ├── exceptions.php
│   │       │   ├── HtmlStringable.php
│   │       │   ├── SmartObject.php
│   │       │   ├── StaticClass.php
│   │       │   └── Translator.php
│   │       ├── .phpstorm.meta.php
│   │       ├── composer.json
│   │       ├── license.md
│   │       └── readme.md
│   ├── nikic
│   │   └── php-parser
│   │       ├── bin
│   │       │   └── php-parse
│   │       ├── lib
│   │       │   └── PhpParser
│   │       │       ├── Builder
│   │       │       │   ├── Class_.php
│   │       │       │   ├── ClassConst.php
│   │       │       │   ├── Declaration.php
│   │       │       │   ├── Enum_.php
│   │       │       │   ├── EnumCase.php
│   │       │       │   ├── Function_.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Interface_.php
│   │       │       │   ├── Method.php
│   │       │       │   ├── Namespace_.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── Property.php
│   │       │       │   ├── Trait_.php
│   │       │       │   ├── TraitUse.php
│   │       │       │   ├── TraitUseAdaptation.php
│   │       │       │   └── Use_.php
│   │       │       ├── Comment
│   │       │       │   └── Doc.php
│   │       │       ├── ErrorHandler
│   │       │       │   ├── Collecting.php
│   │       │       │   └── Throwing.php
│   │       │       ├── Internal
│   │       │       │   ├── DiffElem.php
│   │       │       │   ├── Differ.php
│   │       │       │   ├── PrintableNewAnonClassNode.php
│   │       │       │   ├── TokenPolyfill.php
│   │       │       │   └── TokenStream.php
│   │       │       ├── Lexer
│   │       │       │   ├── TokenEmulator
│   │       │       │   │   ├── AsymmetricVisibilityTokenEmulator.php
│   │       │       │   │   ├── AttributeEmulator.php
│   │       │       │   │   ├── EnumTokenEmulator.php
│   │       │       │   │   ├── ExplicitOctalEmulator.php
│   │       │       │   │   ├── KeywordEmulator.php
│   │       │       │   │   ├── MatchTokenEmulator.php
│   │       │       │   │   ├── NullsafeTokenEmulator.php
│   │       │       │   │   ├── PropertyTokenEmulator.php
│   │       │       │   │   ├── ReadonlyFunctionTokenEmulator.php
│   │       │       │   │   ├── ReadonlyTokenEmulator.php
│   │       │       │   │   ├── ReverseEmulator.php
│   │       │       │   │   └── TokenEmulator.php
│   │       │       │   └── Emulative.php
│   │       │       ├── Node
│   │       │       │   ├── Expr
│   │       │       │   │   ├── AssignOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   └── ShiftRight.php
│   │       │       │   │   ├── BinaryOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── BooleanAnd.php
│   │       │       │   │   │   ├── BooleanOr.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Equal.php
│   │       │       │   │   │   ├── Greater.php
│   │       │       │   │   │   ├── GreaterOrEqual.php
│   │       │       │   │   │   ├── Identical.php
│   │       │       │   │   │   ├── LogicalAnd.php
│   │       │       │   │   │   ├── LogicalOr.php
│   │       │       │   │   │   ├── LogicalXor.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── NotEqual.php
│   │       │       │   │   │   ├── NotIdentical.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   ├── ShiftRight.php
│   │       │       │   │   │   ├── Smaller.php
│   │       │       │   │   │   ├── SmallerOrEqual.php
│   │       │       │   │   │   └── Spaceship.php
│   │       │       │   │   ├── Cast
│   │       │       │   │   │   ├── Array_.php
│   │       │       │   │   │   ├── Bool_.php
│   │       │       │   │   │   ├── Double.php
│   │       │       │   │   │   ├── Int_.php
│   │       │       │   │   │   ├── Object_.php
│   │       │       │   │   │   ├── String_.php
│   │       │       │   │   │   └── Unset_.php
│   │       │       │   │   ├── Array_.php
│   │       │       │   │   ├── ArrayDimFetch.php
│   │       │       │   │   ├── ArrayItem.php
│   │       │       │   │   ├── ArrowFunction.php
│   │       │       │   │   ├── Assign.php
│   │       │       │   │   ├── AssignOp.php
│   │       │       │   │   ├── AssignRef.php
│   │       │       │   │   ├── BinaryOp.php
│   │       │       │   │   ├── BitwiseNot.php
│   │       │       │   │   ├── BooleanNot.php
│   │       │       │   │   ├── CallLike.php
│   │       │       │   │   ├── Cast.php
│   │       │       │   │   ├── ClassConstFetch.php
│   │       │       │   │   ├── Clone_.php
│   │       │       │   │   ├── Closure.php
│   │       │       │   │   ├── ClosureUse.php
│   │       │       │   │   ├── ConstFetch.php
│   │       │       │   │   ├── Empty_.php
│   │       │       │   │   ├── Error.php
│   │       │       │   │   ├── ErrorSuppress.php
│   │       │       │   │   ├── Eval_.php
│   │       │       │   │   ├── Exit_.php
│   │       │       │   │   ├── FuncCall.php
│   │       │       │   │   ├── Include_.php
│   │       │       │   │   ├── Instanceof_.php
│   │       │       │   │   ├── Isset_.php
│   │       │       │   │   ├── List_.php
│   │       │       │   │   ├── Match_.php
│   │       │       │   │   ├── MethodCall.php
│   │       │       │   │   ├── New_.php
│   │       │       │   │   ├── NullsafeMethodCall.php
│   │       │       │   │   ├── NullsafePropertyFetch.php
│   │       │       │   │   ├── PostDec.php
│   │       │       │   │   ├── PostInc.php
│   │       │       │   │   ├── PreDec.php
│   │       │       │   │   ├── PreInc.php
│   │       │       │   │   ├── Print_.php
│   │       │       │   │   ├── PropertyFetch.php
│   │       │       │   │   ├── ShellExec.php
│   │       │       │   │   ├── StaticCall.php
│   │       │       │   │   ├── StaticPropertyFetch.php
│   │       │       │   │   ├── Ternary.php
│   │       │       │   │   ├── Throw_.php
│   │       │       │   │   ├── UnaryMinus.php
│   │       │       │   │   ├── UnaryPlus.php
│   │       │       │   │   ├── Variable.php
│   │       │       │   │   ├── Yield_.php
│   │       │       │   │   └── YieldFrom.php
│   │       │       │   ├── Name
│   │       │       │   │   ├── FullyQualified.php
│   │       │       │   │   └── Relative.php
│   │       │       │   ├── Scalar
│   │       │       │   │   ├── MagicConst
│   │       │       │   │   │   ├── Class_.php
│   │       │       │   │   │   ├── Dir.php
│   │       │       │   │   │   ├── File.php
│   │       │       │   │   │   ├── Function_.php
│   │       │       │   │   │   ├── Line.php
│   │       │       │   │   │   ├── Method.php
│   │       │       │   │   │   ├── Namespace_.php
│   │       │       │   │   │   ├── Property.php
│   │       │       │   │   │   └── Trait_.php
│   │       │       │   │   ├── DNumber.php
│   │       │       │   │   ├── Encapsed.php
│   │       │       │   │   ├── EncapsedStringPart.php
│   │       │       │   │   ├── Float_.php
│   │       │       │   │   ├── Int_.php
│   │       │       │   │   ├── InterpolatedString.php
│   │       │       │   │   ├── LNumber.php
│   │       │       │   │   ├── MagicConst.php
│   │       │       │   │   └── String_.php
│   │       │       │   ├── Stmt
│   │       │       │   │   ├── TraitUseAdaptation
│   │       │       │   │   │   ├── Alias.php
│   │       │       │   │   │   └── Precedence.php
│   │       │       │   │   ├── Block.php
│   │       │       │   │   ├── Break_.php
│   │       │       │   │   ├── Case_.php
│   │       │       │   │   ├── Catch_.php
│   │       │       │   │   ├── Class_.php
│   │       │       │   │   ├── ClassConst.php
│   │       │       │   │   ├── ClassLike.php
│   │       │       │   │   ├── ClassMethod.php
│   │       │       │   │   ├── Const_.php
│   │       │       │   │   ├── Continue_.php
│   │       │       │   │   ├── Declare_.php
│   │       │       │   │   ├── DeclareDeclare.php
│   │       │       │   │   ├── Do_.php
│   │       │       │   │   ├── Echo_.php
│   │       │       │   │   ├── Else_.php
│   │       │       │   │   ├── ElseIf_.php
│   │       │       │   │   ├── Enum_.php
│   │       │       │   │   ├── EnumCase.php
│   │       │       │   │   ├── Expression.php
│   │       │       │   │   ├── Finally_.php
│   │       │       │   │   ├── For_.php
│   │       │       │   │   ├── Foreach_.php
│   │       │       │   │   ├── Function_.php
│   │       │       │   │   ├── Global_.php
│   │       │       │   │   ├── Goto_.php
│   │       │       │   │   ├── GroupUse.php
│   │       │       │   │   ├── HaltCompiler.php
│   │       │       │   │   ├── If_.php
│   │       │       │   │   ├── InlineHTML.php
│   │       │       │   │   ├── Interface_.php
│   │       │       │   │   ├── Label.php
│   │       │       │   │   ├── Namespace_.php
│   │       │       │   │   ├── Nop.php
│   │       │       │   │   ├── Property.php
│   │       │       │   │   ├── PropertyProperty.php
│   │       │       │   │   ├── Return_.php
│   │       │       │   │   ├── Static_.php
│   │       │       │   │   ├── StaticVar.php
│   │       │       │   │   ├── Switch_.php
│   │       │       │   │   ├── Trait_.php
│   │       │       │   │   ├── TraitUse.php
│   │       │       │   │   ├── TraitUseAdaptation.php
│   │       │       │   │   ├── TryCatch.php
│   │       │       │   │   ├── Unset_.php
│   │       │       │   │   ├── Use_.php
│   │       │       │   │   ├── UseUse.php
│   │       │       │   │   └── While_.php
│   │       │       │   ├── Arg.php
│   │       │       │   ├── ArrayItem.php
│   │       │       │   ├── Attribute.php
│   │       │       │   ├── AttributeGroup.php
│   │       │       │   ├── ClosureUse.php
│   │       │       │   ├── ComplexType.php
│   │       │       │   ├── Const_.php
│   │       │       │   ├── DeclareItem.php
│   │       │       │   ├── Expr.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Identifier.php
│   │       │       │   ├── InterpolatedStringPart.php
│   │       │       │   ├── IntersectionType.php
│   │       │       │   ├── MatchArm.php
│   │       │       │   ├── Name.php
│   │       │       │   ├── NullableType.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── PropertyHook.php
│   │       │       │   ├── PropertyItem.php
│   │       │       │   ├── Scalar.php
│   │       │       │   ├── StaticVar.php
│   │       │       │   ├── Stmt.php
│   │       │       │   ├── UnionType.php
│   │       │       │   ├── UseItem.php
│   │       │       │   ├── VariadicPlaceholder.php
│   │       │       │   └── VarLikeIdentifier.php
│   │       │       ├── NodeVisitor
│   │       │       │   ├── CloningVisitor.php
│   │       │       │   ├── CommentAnnotatingVisitor.php
│   │       │       │   ├── FindingVisitor.php
│   │       │       │   ├── FirstFindingVisitor.php
│   │       │       │   ├── NameResolver.php
│   │       │       │   ├── NodeConnectingVisitor.php
│   │       │       │   └── ParentConnectingVisitor.php
│   │       │       ├── Parser
│   │       │       │   ├── Php7.php
│   │       │       │   └── Php8.php
│   │       │       ├── PrettyPrinter
│   │       │       │   └── Standard.php
│   │       │       ├── Builder.php
│   │       │       ├── BuilderFactory.php
│   │       │       ├── BuilderHelpers.php
│   │       │       ├── Comment.php
│   │       │       ├── compatibility_tokens.php
│   │       │       ├── ConstExprEvaluationException.php
│   │       │       ├── ConstExprEvaluator.php
│   │       │       ├── Error.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── JsonDecoder.php
│   │       │       ├── Lexer.php
│   │       │       ├── Modifiers.php
│   │       │       ├── NameContext.php
│   │       │       ├── Node.php
│   │       │       ├── NodeAbstract.php
│   │       │       ├── NodeDumper.php
│   │       │       ├── NodeFinder.php
│   │       │       ├── NodeTraverser.php
│   │       │       ├── NodeTraverserInterface.php
│   │       │       ├── NodeVisitor.php
│   │       │       ├── NodeVisitorAbstract.php
│   │       │       ├── Parser.php
│   │       │       ├── ParserAbstract.php
│   │       │       ├── ParserFactory.php
│   │       │       ├── PhpVersion.php
│   │       │       ├── PrettyPrinter.php
│   │       │       ├── PrettyPrinterAbstract.php
│   │       │       └── Token.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── nunomaduro
│   │   ├── collision
│   │   │   ├── .temp
│   │   │   │   └── .gitkeep
│   │   │   ├── src
│   │   │   │   ├── Adapters
│   │   │   │   │   ├── Laravel
│   │   │   │   │   │   ├── Commands
│   │   │   │   │   │   │   └── TestCommand.php
│   │   │   │   │   │   ├── Exceptions
│   │   │   │   │   │   │   ├── NotSupportedYetException.php
│   │   │   │   │   │   │   └── RequirementsException.php
│   │   │   │   │   │   ├── CollisionServiceProvider.php
│   │   │   │   │   │   ├── ExceptionHandler.php
│   │   │   │   │   │   ├── IgnitionSolutionsRepository.php
│   │   │   │   │   │   └── Inspector.php
│   │   │   │   │   └── Phpunit
│   │   │   │   │       ├── Printers
│   │   │   │   │       │   ├── DefaultPrinter.php
│   │   │   │   │       │   └── ReportablePrinter.php
│   │   │   │   │       ├── Subscribers
│   │   │   │   │       │   ├── EnsurePrinterIsRegisteredSubscriber.php
│   │   │   │   │       │   └── Subscriber.php
│   │   │   │   │       ├── Support
│   │   │   │   │       │   └── ResultReflection.php
│   │   │   │   │       ├── Autoload.php
│   │   │   │   │       ├── ConfigureIO.php
│   │   │   │   │       ├── State.php
│   │   │   │   │       ├── Style.php
│   │   │   │   │       └── TestResult.php
│   │   │   │   ├── Contracts
│   │   │   │   │   ├── Adapters
│   │   │   │   │   │   └── Phpunit
│   │   │   │   │   │       └── HasPrintableTestCaseName.php
│   │   │   │   │   ├── RenderableOnCollisionEditor.php
│   │   │   │   │   ├── RenderlessEditor.php
│   │   │   │   │   ├── RenderlessTrace.php
│   │   │   │   │   └── SolutionsRepository.php
│   │   │   │   ├── Exceptions
│   │   │   │   │   ├── InvalidStyleException.php
│   │   │   │   │   ├── ShouldNotHappen.php
│   │   │   │   │   ├── TestException.php
│   │   │   │   │   └── TestOutcome.php
│   │   │   │   ├── SolutionsRepositories
│   │   │   │   │   └── NullSolutionsRepository.php
│   │   │   │   ├── ArgumentFormatter.php
│   │   │   │   ├── ConsoleColor.php
│   │   │   │   ├── Coverage.php
│   │   │   │   ├── Handler.php
│   │   │   │   ├── Highlighter.php
│   │   │   │   ├── Provider.php
│   │   │   │   └── Writer.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── phpstan-baseline.neon
│   │   │   └── README.md
│   │   └── termwind
│   │       ├── src
│   │       │   ├── Actions
│   │       │   │   └── StyleToMethod.php
│   │       │   ├── Components
│   │       │   │   ├── Anchor.php
│   │       │   │   ├── BreakLine.php
│   │       │   │   ├── Dd.php
│   │       │   │   ├── Div.php
│   │       │   │   ├── Dl.php
│   │       │   │   ├── Dt.php
│   │       │   │   ├── Element.php
│   │       │   │   ├── Hr.php
│   │       │   │   ├── Li.php
│   │       │   │   ├── Ol.php
│   │       │   │   ├── Paragraph.php
│   │       │   │   ├── Raw.php
│   │       │   │   ├── Span.php
│   │       │   │   └── Ul.php
│   │       │   ├── Enums
│   │       │   │   └── Color.php
│   │       │   ├── Exceptions
│   │       │   │   ├── ColorNotFound.php
│   │       │   │   ├── InvalidChild.php
│   │       │   │   ├── InvalidColor.php
│   │       │   │   ├── InvalidStyle.php
│   │       │   │   └── StyleNotFound.php
│   │       │   ├── Helpers
│   │       │   │   └── QuestionHelper.php
│   │       │   ├── Html
│   │       │   │   ├── CodeRenderer.php
│   │       │   │   ├── InheritStyles.php
│   │       │   │   ├── PreRenderer.php
│   │       │   │   └── TableRenderer.php
│   │       │   ├── Laravel
│   │       │   │   └── TermwindServiceProvider.php
│   │       │   ├── Repositories
│   │       │   │   └── Styles.php
│   │       │   ├── ValueObjects
│   │       │   │   ├── Node.php
│   │       │   │   ├── Style.php
│   │       │   │   └── Styles.php
│   │       │   ├── Functions.php
│   │       │   ├── HtmlRenderer.php
│   │       │   ├── Question.php
│   │       │   ├── Terminal.php
│   │       │   └── Termwind.php
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       └── playground.php
│   ├── phar-io
│   │   ├── manifest
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   └── ci.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── ElementCollectionException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidApplicationNameException.php
│   │   │   │   │   ├── InvalidEmailException.php
│   │   │   │   │   ├── InvalidUrlException.php
│   │   │   │   │   ├── ManifestDocumentException.php
│   │   │   │   │   ├── ManifestDocumentLoadingException.php
│   │   │   │   │   ├── ManifestDocumentMapperException.php
│   │   │   │   │   ├── ManifestElementException.php
│   │   │   │   │   ├── ManifestLoaderException.php
│   │   │   │   │   └── NoEmailAddressException.php
│   │   │   │   ├── values
│   │   │   │   │   ├── Application.php
│   │   │   │   │   ├── ApplicationName.php
│   │   │   │   │   ├── Author.php
│   │   │   │   │   ├── AuthorCollection.php
│   │   │   │   │   ├── AuthorCollectionIterator.php
│   │   │   │   │   ├── BundledComponent.php
│   │   │   │   │   ├── BundledComponentCollection.php
│   │   │   │   │   ├── BundledComponentCollectionIterator.php
│   │   │   │   │   ├── CopyrightInformation.php
│   │   │   │   │   ├── Email.php
│   │   │   │   │   ├── Extension.php
│   │   │   │   │   ├── Library.php
│   │   │   │   │   ├── License.php
│   │   │   │   │   ├── Manifest.php
│   │   │   │   │   ├── PhpExtensionRequirement.php
│   │   │   │   │   ├── PhpVersionRequirement.php
│   │   │   │   │   ├── Requirement.php
│   │   │   │   │   ├── RequirementCollection.php
│   │   │   │   │   ├── RequirementCollectionIterator.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   └── Url.php
│   │   │   │   ├── xml
│   │   │   │   │   ├── AuthorElement.php
│   │   │   │   │   ├── AuthorElementCollection.php
│   │   │   │   │   ├── BundlesElement.php
│   │   │   │   │   ├── ComponentElement.php
│   │   │   │   │   ├── ComponentElementCollection.php
│   │   │   │   │   ├── ContainsElement.php
│   │   │   │   │   ├── CopyrightElement.php
│   │   │   │   │   ├── ElementCollection.php
│   │   │   │   │   ├── ExtElement.php
│   │   │   │   │   ├── ExtElementCollection.php
│   │   │   │   │   ├── ExtensionElement.php
│   │   │   │   │   ├── LicenseElement.php
│   │   │   │   │   ├── ManifestDocument.php
│   │   │   │   │   ├── ManifestElement.php
│   │   │   │   │   ├── PhpElement.php
│   │   │   │   │   └── RequiresElement.php
│   │   │   │   ├── ManifestDocumentMapper.php
│   │   │   │   ├── ManifestLoader.php
│   │   │   │   └── ManifestSerializer.php
│   │   │   ├── tools
│   │   │   │   └── php-cs-fixer.d
│   │   │   │       ├── header.txt
│   │   │   │       └── PhpdocSingleLineVarFixer.php
│   │   │   ├── .php-cs-fixer.dist.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── LICENSE
│   │   │   ├── manifest.xsd
│   │   │   └── README.md
│   │   └── version
│   │       ├── src
│   │       │   ├── constraints
│   │       │   │   ├── AbstractVersionConstraint.php
│   │       │   │   ├── AndVersionConstraintGroup.php
│   │       │   │   ├── AnyVersionConstraint.php
│   │       │   │   ├── ExactVersionConstraint.php
│   │       │   │   ├── GreaterThanOrEqualToVersionConstraint.php
│   │       │   │   ├── OrVersionConstraintGroup.php
│   │       │   │   ├── SpecificMajorAndMinorVersionConstraint.php
│   │       │   │   ├── SpecificMajorVersionConstraint.php
│   │       │   │   └── VersionConstraint.php
│   │       │   ├── exceptions
│   │       │   │   ├── Exception.php
│   │       │   │   ├── InvalidPreReleaseSuffixException.php
│   │       │   │   ├── InvalidVersionException.php
│   │       │   │   ├── NoBuildMetaDataException.php
│   │       │   │   ├── NoPreReleaseSuffixException.php
│   │       │   │   └── UnsupportedVersionConstraintException.php
│   │       │   ├── BuildMetaData.php
│   │       │   ├── PreReleaseSuffix.php
│   │       │   ├── Version.php
│   │       │   ├── VersionConstraintParser.php
│   │       │   ├── VersionConstraintValue.php
│   │       │   └── VersionNumber.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── phpoption
│   │   └── phpoption
│   │       ├── src
│   │       │   └── PhpOption
│   │       │       ├── LazyOption.php
│   │       │       ├── None.php
│   │       │       ├── Option.php
│   │       │       └── Some.php
│   │       ├── composer.json
│   │       └── LICENSE
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   │   ├── src
│   │   │   │   ├── Data
│   │   │   │   │   ├── ProcessedCodeCoverageData.php
│   │   │   │   │   └── RawCodeCoverageData.php
│   │   │   │   ├── Driver
│   │   │   │   │   ├── Driver.php
│   │   │   │   │   ├── PcovDriver.php
│   │   │   │   │   ├── Selector.php
│   │   │   │   │   └── XdebugDriver.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── BranchAndPathCoverageNotSupportedException.php
│   │   │   │   │   ├── DeadCodeDetectionNotSupportedException.php
│   │   │   │   │   ├── DirectoryCouldNotBeCreatedException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── FileCouldNotBeWrittenException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── NoCodeCoverageDriverAvailableException.php
│   │   │   │   │   ├── NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
│   │   │   │   │   ├── ParserException.php
│   │   │   │   │   ├── PathExistsButIsNotDirectoryException.php
│   │   │   │   │   ├── PcovNotAvailableException.php
│   │   │   │   │   ├── ReflectionException.php
│   │   │   │   │   ├── ReportAlreadyFinalizedException.php
│   │   │   │   │   ├── StaticAnalysisCacheNotConfiguredException.php
│   │   │   │   │   ├── TestIdMissingException.php
│   │   │   │   │   ├── UnintentionallyCoveredCodeException.php
│   │   │   │   │   ├── WriteOperationFailedException.php
│   │   │   │   │   ├── XdebugNotAvailableException.php
│   │   │   │   │   ├── XdebugNotEnabledException.php
│   │   │   │   │   └── XmlException.php
│   │   │   │   ├── Node
│   │   │   │   │   ├── AbstractNode.php
│   │   │   │   │   ├── Builder.php
│   │   │   │   │   ├── CrapIndex.php
│   │   │   │   │   ├── Directory.php
│   │   │   │   │   ├── File.php
│   │   │   │   │   └── Iterator.php
│   │   │   │   ├── Report
│   │   │   │   │   ├── Html
│   │   │   │   │   │   ├── Renderer
│   │   │   │   │   │   │   ├── Template
│   │   │   │   │   │   │   │   ├── css
│   │   │   │   │   │   │   │   │   ├── bootstrap.min.css
│   │   │   │   │   │   │   │   │   ├── custom.css
│   │   │   │   │   │   │   │   │   ├── nv.d3.min.css
│   │   │   │   │   │   │   │   │   ├── octicons.css
│   │   │   │   │   │   │   │   │   └── style.css
│   │   │   │   │   │   │   │   ├── icons
│   │   │   │   │   │   │   │   │   ├── file-code.svg
│   │   │   │   │   │   │   │   │   └── file-directory.svg
│   │   │   │   │   │   │   │   ├── js
│   │   │   │   │   │   │   │   │   ├── bootstrap.bundle.min.js
│   │   │   │   │   │   │   │   │   ├── d3.min.js
│   │   │   │   │   │   │   │   │   ├── file.js
│   │   │   │   │   │   │   │   │   ├── jquery.min.js
│   │   │   │   │   │   │   │   │   └── nv.d3.min.js
│   │   │   │   │   │   │   │   ├── branches.html.dist
│   │   │   │   │   │   │   │   ├── coverage_bar_branch.html.dist
│   │   │   │   │   │   │   │   ├── coverage_bar.html.dist
│   │   │   │   │   │   │   │   ├── dashboard_branch.html.dist
│   │   │   │   │   │   │   │   ├── dashboard.html.dist
│   │   │   │   │   │   │   │   ├── directory_branch.html.dist
│   │   │   │   │   │   │   │   ├── directory_item_branch.html.dist
│   │   │   │   │   │   │   │   ├── directory_item.html.dist
│   │   │   │   │   │   │   │   ├── directory.html.dist
│   │   │   │   │   │   │   │   ├── file_branch.html.dist
│   │   │   │   │   │   │   │   ├── file_item_branch.html.dist
│   │   │   │   │   │   │   │   ├── file_item.html.dist
│   │   │   │   │   │   │   │   ├── file.html.dist
│   │   │   │   │   │   │   │   ├── line.html.dist
│   │   │   │   │   │   │   │   ├── lines.html.dist
│   │   │   │   │   │   │   │   ├── method_item_branch.html.dist
│   │   │   │   │   │   │   │   ├── method_item.html.dist
│   │   │   │   │   │   │   │   └── paths.html.dist
│   │   │   │   │   │   │   ├── Dashboard.php
│   │   │   │   │   │   │   ├── Directory.php
│   │   │   │   │   │   │   └── File.php
│   │   │   │   │   │   ├── Colors.php
│   │   │   │   │   │   ├── CustomCssFile.php
│   │   │   │   │   │   ├── Facade.php
│   │   │   │   │   │   └── Renderer.php
│   │   │   │   │   ├── Xml
│   │   │   │   │   │   ├── BuildInformation.php
│   │   │   │   │   │   ├── Coverage.php
│   │   │   │   │   │   ├── Directory.php
│   │   │   │   │   │   ├── Facade.php
│   │   │   │   │   │   ├── File.php
│   │   │   │   │   │   ├── Method.php
│   │   │   │   │   │   ├── Node.php
│   │   │   │   │   │   ├── Project.php
│   │   │   │   │   │   ├── Report.php
│   │   │   │   │   │   ├── Source.php
│   │   │   │   │   │   ├── Tests.php
│   │   │   │   │   │   ├── Totals.php
│   │   │   │   │   │   └── Unit.php
│   │   │   │   │   ├── Clover.php
│   │   │   │   │   ├── Cobertura.php
│   │   │   │   │   ├── Crap4j.php
│   │   │   │   │   ├── PHP.php
│   │   │   │   │   ├── Text.php
│   │   │   │   │   └── Thresholds.php
│   │   │   │   ├── StaticAnalysis
│   │   │   │   │   ├── CacheWarmer.php
│   │   │   │   │   ├── CachingFileAnalyser.php
│   │   │   │   │   ├── CodeUnitFindingVisitor.php
│   │   │   │   │   ├── ExecutableLinesFindingVisitor.php
│   │   │   │   │   ├── FileAnalyser.php
│   │   │   │   │   ├── IgnoredLinesFindingVisitor.php
│   │   │   │   │   └── ParsingFileAnalyser.php
│   │   │   │   ├── TestSize
│   │   │   │   │   ├── Known.php
│   │   │   │   │   ├── Large.php
│   │   │   │   │   ├── Medium.php
│   │   │   │   │   ├── Small.php
│   │   │   │   │   ├── TestSize.php
│   │   │   │   │   └── Unknown.php
│   │   │   │   ├── TestStatus
│   │   │   │   │   ├── Failure.php
│   │   │   │   │   ├── Known.php
│   │   │   │   │   ├── Success.php
│   │   │   │   │   ├── TestStatus.php
│   │   │   │   │   └── Unknown.php
│   │   │   │   ├── Util
│   │   │   │   │   ├── Filesystem.php
│   │   │   │   │   └── Percentage.php
│   │   │   │   ├── CodeCoverage.php
│   │   │   │   ├── Filter.php
│   │   │   │   └── Version.php
│   │   │   ├── ChangeLog-11.0.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── php-file-iterator
│   │   │   ├── src
│   │   │   │   ├── ExcludeIterator.php
│   │   │   │   ├── Facade.php
│   │   │   │   ├── Factory.php
│   │   │   │   └── Iterator.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── php-invoker
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── ProcessControlExtensionNotLoadedException.php
│   │   │   │   │   └── TimeoutException.php
│   │   │   │   └── Invoker.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── php-text-template
│   │   │   ├── .psalm
│   │   │   │   ├── baseline.xml
│   │   │   │   └── config.xml
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   └── Template.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── php-timer
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── NoActiveTimerException.php
│   │   │   │   │   └── TimeSinceStartOfRequestNotAvailableException.php
│   │   │   │   ├── Duration.php
│   │   │   │   ├── ResourceUsageFormatter.php
│   │   │   │   └── Timer.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   └── phpunit
│   │       ├── schema
│   │       │   ├── 10.0.xsd
│   │       │   ├── 10.1.xsd
│   │       │   ├── 10.2.xsd
│   │       │   ├── 10.3.xsd
│   │       │   ├── 10.4.xsd
│   │       │   ├── 10.5.xsd
│   │       │   ├── 11.0.xsd
│   │       │   ├── 11.1.xsd
│   │       │   ├── 11.2.xsd
│   │       │   ├── 11.3.xsd
│   │       │   ├── 11.4.xsd
│   │       │   ├── 8.5.xsd
│   │       │   ├── 9.0.xsd
│   │       │   ├── 9.1.xsd
│   │       │   ├── 9.2.xsd
│   │       │   ├── 9.3.xsd
│   │       │   ├── 9.4.xsd
│   │       │   └── 9.5.xsd
│   │       ├── src
│   │       │   ├── Event
│   │       │   │   ├── Dispatcher
│   │       │   │   │   ├── CollectingDispatcher.php
│   │       │   │   │   ├── DeferringDispatcher.php
│   │       │   │   │   ├── DirectDispatcher.php
│   │       │   │   │   ├── Dispatcher.php
│   │       │   │   │   └── SubscribableDispatcher.php
│   │       │   │   ├── Emitter
│   │       │   │   │   ├── DispatchingEmitter.php
│   │       │   │   │   └── Emitter.php
│   │       │   │   ├── Events
│   │       │   │   │   ├── Application
│   │       │   │   │   │   ├── Finished.php
│   │       │   │   │   │   ├── FinishedSubscriber.php
│   │       │   │   │   │   ├── Started.php
│   │       │   │   │   │   └── StartedSubscriber.php
│   │       │   │   │   ├── Test
│   │       │   │   │   │   ├── HookMethod
│   │       │   │   │   │   │   ├── AfterLastTestMethodCalled.php
│   │       │   │   │   │   │   ├── AfterLastTestMethodCalledSubscriber.php
│   │       │   │   │   │   │   ├── AfterLastTestMethodErrored.php
│   │       │   │   │   │   │   ├── AfterLastTestMethodErroredSubscriber.php
│   │       │   │   │   │   │   ├── AfterLastTestMethodFinished.php
│   │       │   │   │   │   │   ├── AfterLastTestMethodFinishedSubscriber.php
│   │       │   │   │   │   │   ├── AfterTestMethodCalled.php
│   │       │   │   │   │   │   ├── AfterTestMethodCalledSubscriber.php
│   │       │   │   │   │   │   ├── AfterTestMethodErrored.php
│   │       │   │   │   │   │   ├── AfterTestMethodErroredSubscriber.php
│   │       │   │   │   │   │   ├── AfterTestMethodFinished.php
│   │       │   │   │   │   │   ├── AfterTestMethodFinishedSubscriber.php
│   │       │   │   │   │   │   ├── BeforeFirstTestMethodCalled.php
│   │       │   │   │   │   │   ├── BeforeFirstTestMethodCalledSubscriber.php
│   │       │   │   │   │   │   ├── BeforeFirstTestMethodErrored.php
│   │       │   │   │   │   │   ├── BeforeFirstTestMethodErroredSubscriber.php
│   │       │   │   │   │   │   ├── BeforeFirstTestMethodFinished.php
│   │       │   │   │   │   │   ├── BeforeFirstTestMethodFinishedSubscriber.php
│   │       │   │   │   │   │   ├── BeforeTestMethodCalled.php
│   │       │   │   │   │   │   ├── BeforeTestMethodCalledSubscriber.php
│   │       │   │   │   │   │   ├── BeforeTestMethodErrored.php
│   │       │   │   │   │   │   ├── BeforeTestMethodErroredSubscriber.php
│   │       │   │   │   │   │   ├── BeforeTestMethodFinished.php
│   │       │   │   │   │   │   ├── BeforeTestMethodFinishedSubscriber.php
│   │       │   │   │   │   │   ├── PostConditionCalled.php
│   │       │   │   │   │   │   ├── PostConditionCalledSubscriber.php
│   │       │   │   │   │   │   ├── PostConditionErrored.php
│   │       │   │   │   │   │   ├── PostConditionErroredSubscriber.php
│   │       │   │   │   │   │   ├── PostConditionFinished.php
│   │       │   │   │   │   │   ├── PostConditionFinishedSubscriber.php
│   │       │   │   │   │   │   ├── PreConditionCalled.php
│   │       │   │   │   │   │   ├── PreConditionCalledSubscriber.php
│   │       │   │   │   │   │   ├── PreConditionErrored.php
│   │       │   │   │   │   │   ├── PreConditionErroredSubscriber.php
│   │       │   │   │   │   │   ├── PreConditionFinished.php
│   │       │   │   │   │   │   └── PreConditionFinishedSubscriber.php
│   │       │   │   │   │   ├── Issue
│   │       │   │   │   │   │   ├── ConsideredRisky.php
│   │       │   │   │   │   │   ├── ConsideredRiskySubscriber.php
│   │       │   │   │   │   │   ├── DeprecationTriggered.php
│   │       │   │   │   │   │   ├── DeprecationTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── ErrorTriggered.php
│   │       │   │   │   │   │   ├── ErrorTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── NoticeTriggered.php
│   │       │   │   │   │   │   ├── NoticeTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── PhpDeprecationTriggered.php
│   │       │   │   │   │   │   ├── PhpDeprecationTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── PhpNoticeTriggered.php
│   │       │   │   │   │   │   ├── PhpNoticeTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── PhpunitDeprecationTriggered.php
│   │       │   │   │   │   │   ├── PhpunitDeprecationTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── PhpunitErrorTriggered.php
│   │       │   │   │   │   │   ├── PhpunitErrorTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── PhpunitWarningTriggered.php
│   │       │   │   │   │   │   ├── PhpunitWarningTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── PhpWarningTriggered.php
│   │       │   │   │   │   │   ├── PhpWarningTriggeredSubscriber.php
│   │       │   │   │   │   │   ├── WarningTriggered.php
│   │       │   │   │   │   │   └── WarningTriggeredSubscriber.php
│   │       │   │   │   │   ├── Lifecycle
│   │       │   │   │   │   │   ├── DataProviderMethodCalled.php
│   │       │   │   │   │   │   ├── DataProviderMethodCalledSubscriber.php
│   │       │   │   │   │   │   ├── DataProviderMethodFinished.php
│   │       │   │   │   │   │   ├── DataProviderMethodFinishedSubscriber.php
│   │       │   │   │   │   │   ├── Finished.php
│   │       │   │   │   │   │   ├── FinishedSubscriber.php
│   │       │   │   │   │   │   ├── PreparationFailed.php
│   │       │   │   │   │   │   ├── PreparationFailedSubscriber.php
│   │       │   │   │   │   │   ├── PreparationStarted.php
│   │       │   │   │   │   │   ├── PreparationStartedSubscriber.php
│   │       │   │   │   │   │   ├── Prepared.php
│   │       │   │   │   │   │   └── PreparedSubscriber.php
│   │       │   │   │   │   ├── Outcome
│   │       │   │   │   │   │   ├── Errored.php
│   │       │   │   │   │   │   ├── ErroredSubscriber.php
│   │       │   │   │   │   │   ├── Failed.php
│   │       │   │   │   │   │   ├── FailedSubscriber.php
│   │       │   │   │   │   │   ├── MarkedIncomplete.php
│   │       │   │   │   │   │   ├── MarkedIncompleteSubscriber.php
│   │       │   │   │   │   │   ├── Passed.php
│   │       │   │   │   │   │   ├── PassedSubscriber.php
│   │       │   │   │   │   │   ├── Skipped.php
│   │       │   │   │   │   │   └── SkippedSubscriber.php
│   │       │   │   │   │   ├── TestDouble
│   │       │   │   │   │   │   ├── MockObjectCreated.php
│   │       │   │   │   │   │   ├── MockObjectCreatedSubscriber.php
│   │       │   │   │   │   │   ├── MockObjectForAbstractClassCreated.php
│   │       │   │   │   │   │   ├── MockObjectForAbstractClassCreatedSubscriber.php
│   │       │   │   │   │   │   ├── MockObjectForIntersectionOfInterfacesCreated.php
│   │       │   │   │   │   │   ├── MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
│   │       │   │   │   │   │   ├── MockObjectForTraitCreated.php
│   │       │   │   │   │   │   ├── MockObjectForTraitCreatedSubscriber.php
│   │       │   │   │   │   │   ├── MockObjectFromWsdlCreated.php
│   │       │   │   │   │   │   ├── MockObjectFromWsdlCreatedSubscriber.php
│   │       │   │   │   │   │   ├── PartialMockObjectCreated.php
│   │       │   │   │   │   │   ├── PartialMockObjectCreatedSubscriber.php
│   │       │   │   │   │   │   ├── TestProxyCreated.php
│   │       │   │   │   │   │   ├── TestProxyCreatedSubscriber.php
│   │       │   │   │   │   │   ├── TestStubCreated.php
│   │       │   │   │   │   │   ├── TestStubCreatedSubscriber.php
│   │       │   │   │   │   │   ├── TestStubForIntersectionOfInterfacesCreated.php
│   │       │   │   │   │   │   └── TestStubForIntersectionOfInterfacesCreatedSubscriber.php
│   │       │   │   │   │   ├── ComparatorRegistered.php
│   │       │   │   │   │   ├── ComparatorRegisteredSubscriber.php
│   │       │   │   │   │   ├── PrintedUnexpectedOutput.php
│   │       │   │   │   │   └── PrintedUnexpectedOutputSubscriber.php
│   │       │   │   │   ├── TestRunner
│   │       │   │   │   │   ├── BootstrapFinished.php
│   │       │   │   │   │   ├── BootstrapFinishedSubscriber.php
│   │       │   │   │   │   ├── ChildProcessFinished.php
│   │       │   │   │   │   ├── ChildProcessFinishedSubscriber.php
│   │       │   │   │   │   ├── ChildProcessStarted.php
│   │       │   │   │   │   ├── ChildProcessStartedSubscriber.php
│   │       │   │   │   │   ├── Configured.php
│   │       │   │   │   │   ├── ConfiguredSubscriber.php
│   │       │   │   │   │   ├── DeprecationTriggered.php
│   │       │   │   │   │   ├── DeprecationTriggeredSubscriber.php
│   │       │   │   │   │   ├── EventFacadeSealed.php
│   │       │   │   │   │   ├── EventFacadeSealedSubscriber.php
│   │       │   │   │   │   ├── ExecutionAborted.php
│   │       │   │   │   │   ├── ExecutionAbortedSubscriber.php
│   │       │   │   │   │   ├── ExecutionFinished.php
│   │       │   │   │   │   ├── ExecutionFinishedSubscriber.php
│   │       │   │   │   │   ├── ExecutionStarted.php
│   │       │   │   │   │   ├── ExecutionStartedSubscriber.php
│   │       │   │   │   │   ├── ExtensionBootstrapped.php
│   │       │   │   │   │   ├── ExtensionBootstrappedSubscriber.php
│   │       │   │   │   │   ├── ExtensionLoadedFromPhar.php
│   │       │   │   │   │   ├── ExtensionLoadedFromPharSubscriber.php
│   │       │   │   │   │   ├── Finished.php
│   │       │   │   │   │   ├── FinishedSubscriber.php
│   │       │   │   │   │   ├── GarbageCollectionDisabled.php
│   │       │   │   │   │   ├── GarbageCollectionDisabledSubscriber.php
│   │       │   │   │   │   ├── GarbageCollectionEnabled.php
│   │       │   │   │   │   ├── GarbageCollectionEnabledSubscriber.php
│   │       │   │   │   │   ├── GarbageCollectionTriggered.php
│   │       │   │   │   │   ├── GarbageCollectionTriggeredSubscriber.php
│   │       │   │   │   │   ├── Started.php
│   │       │   │   │   │   ├── StartedSubscriber.php
│   │       │   │   │   │   ├── WarningTriggered.php
│   │       │   │   │   │   └── WarningTriggeredSubscriber.php
│   │       │   │   │   ├── TestSuite
│   │       │   │   │   │   ├── Filtered.php
│   │       │   │   │   │   ├── FilteredSubscriber.php
│   │       │   │   │   │   ├── Finished.php
│   │       │   │   │   │   ├── FinishedSubscriber.php
│   │       │   │   │   │   ├── Loaded.php
│   │       │   │   │   │   ├── LoadedSubscriber.php
│   │       │   │   │   │   ├── Skipped.php
│   │       │   │   │   │   ├── SkippedSubscriber.php
│   │       │   │   │   │   ├── Sorted.php
│   │       │   │   │   │   ├── SortedSubscriber.php
│   │       │   │   │   │   ├── Started.php
│   │       │   │   │   │   └── StartedSubscriber.php
│   │       │   │   │   ├── Event.php
│   │       │   │   │   ├── EventCollection.php
│   │       │   │   │   └── EventCollectionIterator.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── EventAlreadyAssignedException.php
│   │       │   │   │   ├── EventFacadeIsSealedException.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── InvalidArgumentException.php
│   │       │   │   │   ├── InvalidEventException.php
│   │       │   │   │   ├── InvalidSubscriberException.php
│   │       │   │   │   ├── MapError.php
│   │       │   │   │   ├── NoComparisonFailureException.php
│   │       │   │   │   ├── NoDataSetFromDataProviderException.php
│   │       │   │   │   ├── NoPreviousThrowableException.php
│   │       │   │   │   ├── NoTestCaseObjectOnCallStackException.php
│   │       │   │   │   ├── RuntimeException.php
│   │       │   │   │   ├── SubscriberTypeAlreadyRegisteredException.php
│   │       │   │   │   ├── UnknownEventException.php
│   │       │   │   │   ├── UnknownEventTypeException.php
│   │       │   │   │   ├── UnknownSubscriberException.php
│   │       │   │   │   └── UnknownSubscriberTypeException.php
│   │       │   │   ├── Value
│   │       │   │   │   ├── Runtime
│   │       │   │   │   │   ├── OperatingSystem.php
│   │       │   │   │   │   ├── PHP.php
│   │       │   │   │   │   ├── PHPUnit.php
│   │       │   │   │   │   └── Runtime.php
│   │       │   │   │   ├── Telemetry
│   │       │   │   │   │   ├── Duration.php
│   │       │   │   │   │   ├── GarbageCollectorStatus.php
│   │       │   │   │   │   ├── GarbageCollectorStatusProvider.php
│   │       │   │   │   │   ├── HRTime.php
│   │       │   │   │   │   ├── Info.php
│   │       │   │   │   │   ├── MemoryMeter.php
│   │       │   │   │   │   ├── MemoryUsage.php
│   │       │   │   │   │   ├── Php81GarbageCollectorStatusProvider.php
│   │       │   │   │   │   ├── Php83GarbageCollectorStatusProvider.php
│   │       │   │   │   │   ├── Snapshot.php
│   │       │   │   │   │   ├── StopWatch.php
│   │       │   │   │   │   ├── System.php
│   │       │   │   │   │   ├── SystemMemoryMeter.php
│   │       │   │   │   │   ├── SystemStopWatch.php
│   │       │   │   │   │   └── SystemStopWatchWithOffset.php
│   │       │   │   │   ├── Test
│   │       │   │   │   │   ├── Issue
│   │       │   │   │   │   │   ├── DirectTrigger.php
│   │       │   │   │   │   │   ├── IndirectTrigger.php
│   │       │   │   │   │   │   ├── IssueTrigger.php
│   │       │   │   │   │   │   ├── SelfTrigger.php
│   │       │   │   │   │   │   ├── TestTrigger.php
│   │       │   │   │   │   │   └── UnknownTrigger.php
│   │       │   │   │   │   ├── TestData
│   │       │   │   │   │   │   ├── DataFromDataProvider.php
│   │       │   │   │   │   │   ├── DataFromTestDependency.php
│   │       │   │   │   │   │   ├── TestData.php
│   │       │   │   │   │   │   ├── TestDataCollection.php
│   │       │   │   │   │   │   └── TestDataCollectionIterator.php
│   │       │   │   │   │   ├── Phpt.php
│   │       │   │   │   │   ├── Test.php
│   │       │   │   │   │   ├── TestCollection.php
│   │       │   │   │   │   ├── TestCollectionIterator.php
│   │       │   │   │   │   ├── TestDox.php
│   │       │   │   │   │   ├── TestDoxBuilder.php
│   │       │   │   │   │   ├── TestMethod.php
│   │       │   │   │   │   └── TestMethodBuilder.php
│   │       │   │   │   ├── TestSuite
│   │       │   │   │   │   ├── TestSuite.php
│   │       │   │   │   │   ├── TestSuiteBuilder.php
│   │       │   │   │   │   ├── TestSuiteForTestClass.php
│   │       │   │   │   │   ├── TestSuiteForTestMethodWithDataProvider.php
│   │       │   │   │   │   └── TestSuiteWithName.php
│   │       │   │   │   ├── ClassMethod.php
│   │       │   │   │   ├── ComparisonFailure.php
│   │       │   │   │   ├── ComparisonFailureBuilder.php
│   │       │   │   │   ├── Throwable.php
│   │       │   │   │   └── ThrowableBuilder.php
│   │       │   │   ├── Facade.php
│   │       │   │   ├── Subscriber.php
│   │       │   │   ├── Tracer.php
│   │       │   │   └── TypeMap.php
│   │       │   ├── Framework
│   │       │   │   ├── Assert
│   │       │   │   │   └── Functions.php
│   │       │   │   ├── Attributes
│   │       │   │   │   ├── After.php
│   │       │   │   │   ├── AfterClass.php
│   │       │   │   │   ├── BackupGlobals.php
│   │       │   │   │   ├── BackupStaticProperties.php
│   │       │   │   │   ├── Before.php
│   │       │   │   │   ├── BeforeClass.php
│   │       │   │   │   ├── CoversClass.php
│   │       │   │   │   ├── CoversFunction.php
│   │       │   │   │   ├── CoversMethod.php
│   │       │   │   │   ├── CoversNothing.php
│   │       │   │   │   ├── CoversTrait.php
│   │       │   │   │   ├── DataProvider.php
│   │       │   │   │   ├── DataProviderExternal.php
│   │       │   │   │   ├── Depends.php
│   │       │   │   │   ├── DependsExternal.php
│   │       │   │   │   ├── DependsExternalUsingDeepClone.php
│   │       │   │   │   ├── DependsExternalUsingShallowClone.php
│   │       │   │   │   ├── DependsOnClass.php
│   │       │   │   │   ├── DependsOnClassUsingDeepClone.php
│   │       │   │   │   ├── DependsOnClassUsingShallowClone.php
│   │       │   │   │   ├── DependsUsingDeepClone.php
│   │       │   │   │   ├── DependsUsingShallowClone.php
│   │       │   │   │   ├── DisableReturnValueGenerationForTestDoubles.php
│   │       │   │   │   ├── DoesNotPerformAssertions.php
│   │       │   │   │   ├── ExcludeGlobalVariableFromBackup.php
│   │       │   │   │   ├── ExcludeStaticPropertyFromBackup.php
│   │       │   │   │   ├── Group.php
│   │       │   │   │   ├── IgnoreDeprecations.php
│   │       │   │   │   ├── IgnorePhpunitDeprecations.php
│   │       │   │   │   ├── Large.php
│   │       │   │   │   ├── Medium.php
│   │       │   │   │   ├── PostCondition.php
│   │       │   │   │   ├── PreCondition.php
│   │       │   │   │   ├── PreserveGlobalState.php
│   │       │   │   │   ├── RequiresFunction.php
│   │       │   │   │   ├── RequiresMethod.php
│   │       │   │   │   ├── RequiresOperatingSystem.php
│   │       │   │   │   ├── RequiresOperatingSystemFamily.php
│   │       │   │   │   ├── RequiresPhp.php
│   │       │   │   │   ├── RequiresPhpExtension.php
│   │       │   │   │   ├── RequiresPhpunit.php
│   │       │   │   │   ├── RequiresPhpunitExtension.php
│   │       │   │   │   ├── RequiresSetting.php
│   │       │   │   │   ├── RunClassInSeparateProcess.php
│   │       │   │   │   ├── RunInSeparateProcess.php
│   │       │   │   │   ├── RunTestsInSeparateProcesses.php
│   │       │   │   │   ├── Small.php
│   │       │   │   │   ├── Test.php
│   │       │   │   │   ├── TestDox.php
│   │       │   │   │   ├── TestWith.php
│   │       │   │   │   ├── TestWithJson.php
│   │       │   │   │   ├── Ticket.php
│   │       │   │   │   ├── UsesClass.php
│   │       │   │   │   ├── UsesFunction.php
│   │       │   │   │   ├── UsesMethod.php
│   │       │   │   │   ├── UsesTrait.php
│   │       │   │   │   └── WithoutErrorHandler.php
│   │       │   │   ├── Constraint
│   │       │   │   │   ├── Boolean
│   │       │   │   │   │   ├── IsFalse.php
│   │       │   │   │   │   └── IsTrue.php
│   │       │   │   │   ├── Cardinality
│   │       │   │   │   │   ├── Count.php
│   │       │   │   │   │   ├── GreaterThan.php
│   │       │   │   │   │   ├── IsEmpty.php
│   │       │   │   │   │   ├── LessThan.php
│   │       │   │   │   │   └── SameSize.php
│   │       │   │   │   ├── Equality
│   │       │   │   │   │   ├── IsEqual.php
│   │       │   │   │   │   ├── IsEqualCanonicalizing.php
│   │       │   │   │   │   ├── IsEqualIgnoringCase.php
│   │       │   │   │   │   └── IsEqualWithDelta.php
│   │       │   │   │   ├── Exception
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   ├── ExceptionCode.php
│   │       │   │   │   │   ├── ExceptionMessageIsOrContains.php
│   │       │   │   │   │   └── ExceptionMessageMatchesRegularExpression.php
│   │       │   │   │   ├── Filesystem
│   │       │   │   │   │   ├── DirectoryExists.php
│   │       │   │   │   │   ├── FileExists.php
│   │       │   │   │   │   ├── IsReadable.php
│   │       │   │   │   │   └── IsWritable.php
│   │       │   │   │   ├── Math
│   │       │   │   │   │   ├── IsFinite.php
│   │       │   │   │   │   ├── IsInfinite.php
│   │       │   │   │   │   └── IsNan.php
│   │       │   │   │   ├── Object
│   │       │   │   │   │   ├── ObjectEquals.php
│   │       │   │   │   │   └── ObjectHasProperty.php
│   │       │   │   │   ├── Operator
│   │       │   │   │   │   ├── BinaryOperator.php
│   │       │   │   │   │   ├── LogicalAnd.php
│   │       │   │   │   │   ├── LogicalNot.php
│   │       │   │   │   │   ├── LogicalOr.php
│   │       │   │   │   │   ├── LogicalXor.php
│   │       │   │   │   │   ├── Operator.php
│   │       │   │   │   │   └── UnaryOperator.php
│   │       │   │   │   ├── String
│   │       │   │   │   │   ├── IsJson.php
│   │       │   │   │   │   ├── RegularExpression.php
│   │       │   │   │   │   ├── StringContains.php
│   │       │   │   │   │   ├── StringEndsWith.php
│   │       │   │   │   │   ├── StringEqualsStringIgnoringLineEndings.php
│   │       │   │   │   │   ├── StringMatchesFormatDescription.php
│   │       │   │   │   │   └── StringStartsWith.php
│   │       │   │   │   ├── Traversable
│   │       │   │   │   │   ├── ArrayHasKey.php
│   │       │   │   │   │   ├── IsList.php
│   │       │   │   │   │   ├── TraversableContains.php
│   │       │   │   │   │   ├── TraversableContainsEqual.php
│   │       │   │   │   │   ├── TraversableContainsIdentical.php
│   │       │   │   │   │   └── TraversableContainsOnly.php
│   │       │   │   │   ├── Type
│   │       │   │   │   │   ├── IsInstanceOf.php
│   │       │   │   │   │   ├── IsNull.php
│   │       │   │   │   │   └── IsType.php
│   │       │   │   │   ├── Callback.php
│   │       │   │   │   ├── Constraint.php
│   │       │   │   │   ├── IsAnything.php
│   │       │   │   │   ├── IsIdentical.php
│   │       │   │   │   └── JsonMatches.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── Incomplete
│   │       │   │   │   │   ├── IncompleteTest.php
│   │       │   │   │   │   └── IncompleteTestError.php
│   │       │   │   │   ├── ObjectEquals
│   │       │   │   │   │   ├── ActualValueIsNotAnObjectException.php
│   │       │   │   │   │   ├── ComparisonMethodDoesNotAcceptParameterTypeException.php
│   │       │   │   │   │   ├── ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
│   │       │   │   │   │   ├── ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
│   │       │   │   │   │   ├── ComparisonMethodDoesNotDeclareParameterTypeException.php
│   │       │   │   │   │   └── ComparisonMethodDoesNotExistException.php
│   │       │   │   │   ├── Skipped
│   │       │   │   │   │   ├── SkippedTest.php
│   │       │   │   │   │   ├── SkippedTestSuiteError.php
│   │       │   │   │   │   └── SkippedWithMessageException.php
│   │       │   │   │   ├── AssertionFailedError.php
│   │       │   │   │   ├── CodeCoverageException.php
│   │       │   │   │   ├── EmptyStringException.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── ExpectationFailedException.php
│   │       │   │   │   ├── GeneratorNotSupportedException.php
│   │       │   │   │   ├── InvalidArgumentException.php
│   │       │   │   │   ├── InvalidCoversTargetException.php
│   │       │   │   │   ├── InvalidDataProviderException.php
│   │       │   │   │   ├── InvalidDependencyException.php
│   │       │   │   │   ├── NoChildTestSuiteException.php
│   │       │   │   │   ├── PhptAssertionFailedError.php
│   │       │   │   │   ├── ProcessIsolationException.php
│   │       │   │   │   ├── UnknownClassOrInterfaceException.php
│   │       │   │   │   └── UnknownTypeException.php
│   │       │   │   ├── MockObject
│   │       │   │   │   ├── Exception
│   │       │   │   │   │   ├── BadMethodCallException.php
│   │       │   │   │   │   ├── CannotCloneTestDoubleForReadonlyClassException.php
│   │       │   │   │   │   ├── CannotUseOnlyMethodsException.php
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   ├── IncompatibleReturnValueException.php
│   │       │   │   │   │   ├── MatchBuilderNotFoundException.php
│   │       │   │   │   │   ├── MatcherAlreadyRegisteredException.php
│   │       │   │   │   │   ├── MethodCannotBeConfiguredException.php
│   │       │   │   │   │   ├── MethodNameAlreadyConfiguredException.php
│   │       │   │   │   │   ├── MethodNameNotConfiguredException.php
│   │       │   │   │   │   ├── MethodParametersAlreadyConfiguredException.php
│   │       │   │   │   │   ├── NeverReturningMethodException.php
│   │       │   │   │   │   ├── NoMoreReturnValuesConfiguredException.php
│   │       │   │   │   │   ├── ReturnValueNotConfiguredException.php
│   │       │   │   │   │   └── RuntimeException.php
│   │       │   │   │   ├── Generator
│   │       │   │   │   │   ├── Exception
│   │       │   │   │   │   │   ├── CannotUseAddMethodsException.php
│   │       │   │   │   │   │   ├── ClassIsEnumerationException.php
│   │       │   │   │   │   │   ├── ClassIsFinalException.php
│   │       │   │   │   │   │   ├── DuplicateMethodException.php
│   │       │   │   │   │   │   ├── Exception.php
│   │       │   │   │   │   │   ├── InvalidMethodNameException.php
│   │       │   │   │   │   │   ├── NameAlreadyInUseException.php
│   │       │   │   │   │   │   ├── OriginalConstructorInvocationRequiredException.php
│   │       │   │   │   │   │   ├── ReflectionException.php
│   │       │   │   │   │   │   ├── RuntimeException.php
│   │       │   │   │   │   │   ├── SoapExtensionNotAvailableException.php
│   │       │   │   │   │   │   ├── UnknownClassException.php
│   │       │   │   │   │   │   ├── UnknownTraitException.php
│   │       │   │   │   │   │   └── UnknownTypeException.php
│   │       │   │   │   │   ├── templates
│   │       │   │   │   │   │   ├── deprecation.tpl
│   │       │   │   │   │   │   ├── doubled_method.tpl
│   │       │   │   │   │   │   ├── doubled_static_method.tpl
│   │       │   │   │   │   │   ├── intersection.tpl
│   │       │   │   │   │   │   ├── proxied_method.tpl
│   │       │   │   │   │   │   ├── test_double_class.tpl
│   │       │   │   │   │   │   ├── trait_class.tpl
│   │       │   │   │   │   │   ├── wsdl_class.tpl
│   │       │   │   │   │   │   └── wsdl_method.tpl
│   │       │   │   │   │   ├── Generator.php
│   │       │   │   │   │   ├── HookedProperty.php
│   │       │   │   │   │   ├── HookedPropertyGenerator.php
│   │       │   │   │   │   ├── MockClass.php
│   │       │   │   │   │   ├── MockMethod.php
│   │       │   │   │   │   ├── MockMethodSet.php
│   │       │   │   │   │   ├── MockTrait.php
│   │       │   │   │   │   ├── MockType.php
│   │       │   │   │   │   └── TemplateLoader.php
│   │       │   │   │   ├── Runtime
│   │       │   │   │   │   ├── Api
│   │       │   │   │   │   │   ├── DoubledCloneMethod.php
│   │       │   │   │   │   │   ├── ErrorCloneMethod.php
│   │       │   │   │   │   │   ├── GeneratedAsMockObject.php
│   │       │   │   │   │   │   ├── GeneratedAsTestStub.php
│   │       │   │   │   │   │   ├── Method.php
│   │       │   │   │   │   │   ├── MockObjectApi.php
│   │       │   │   │   │   │   ├── MutableStubApi.php
│   │       │   │   │   │   │   ├── ProxiedCloneMethod.php
│   │       │   │   │   │   │   ├── StubApi.php
│   │       │   │   │   │   │   └── TestDoubleState.php
│   │       │   │   │   │   ├── Builder
│   │       │   │   │   │   │   ├── Identity.php
│   │       │   │   │   │   │   ├── InvocationMocker.php
│   │       │   │   │   │   │   ├── InvocationStubber.php
│   │       │   │   │   │   │   ├── MethodNameMatch.php
│   │       │   │   │   │   │   ├── ParametersMatch.php
│   │       │   │   │   │   │   └── Stub.php
│   │       │   │   │   │   ├── Interface
│   │       │   │   │   │   │   ├── MockObject.php
│   │       │   │   │   │   │   ├── MockObjectInternal.php
│   │       │   │   │   │   │   ├── Stub.php
│   │       │   │   │   │   │   └── StubInternal.php
│   │       │   │   │   │   ├── PropertyHook
│   │       │   │   │   │   │   ├── PropertyGetHook.php
│   │       │   │   │   │   │   ├── PropertyHook.php
│   │       │   │   │   │   │   └── PropertySetHook.php
│   │       │   │   │   │   ├── Rule
│   │       │   │   │   │   │   ├── AnyInvokedCount.php
│   │       │   │   │   │   │   ├── AnyParameters.php
│   │       │   │   │   │   │   ├── InvocationOrder.php
│   │       │   │   │   │   │   ├── InvokedAtLeastCount.php
│   │       │   │   │   │   │   ├── InvokedAtLeastOnce.php
│   │       │   │   │   │   │   ├── InvokedAtMostCount.php
│   │       │   │   │   │   │   ├── InvokedCount.php
│   │       │   │   │   │   │   ├── MethodName.php
│   │       │   │   │   │   │   ├── Parameters.php
│   │       │   │   │   │   │   └── ParametersRule.php
│   │       │   │   │   │   ├── Stub
│   │       │   │   │   │   │   ├── ConsecutiveCalls.php
│   │       │   │   │   │   │   ├── Exception.php
│   │       │   │   │   │   │   ├── ReturnArgument.php
│   │       │   │   │   │   │   ├── ReturnCallback.php
│   │       │   │   │   │   │   ├── ReturnReference.php
│   │       │   │   │   │   │   ├── ReturnSelf.php
│   │       │   │   │   │   │   ├── ReturnStub.php
│   │       │   │   │   │   │   ├── ReturnValueMap.php
│   │       │   │   │   │   │   └── Stub.php
│   │       │   │   │   │   ├── Invocation.php
│   │       │   │   │   │   ├── InvocationHandler.php
│   │       │   │   │   │   ├── Matcher.php
│   │       │   │   │   │   ├── MethodNameConstraint.php
│   │       │   │   │   │   └── ReturnValueGenerator.php
│   │       │   │   │   ├── ConfigurableMethod.php
│   │       │   │   │   └── MockBuilder.php
│   │       │   │   ├── TestRunner
│   │       │   │   │   ├── templates
│   │       │   │   │   │   ├── class.tpl
│   │       │   │   │   │   └── method.tpl
│   │       │   │   │   ├── ChildProcessResultProcessor.php
│   │       │   │   │   ├── IsolatedTestRunner.php
│   │       │   │   │   ├── IsolatedTestRunnerRegistry.php
│   │       │   │   │   ├── SeparateProcessTestRunner.php
│   │       │   │   │   └── TestRunner.php
│   │       │   │   ├── TestSize
│   │       │   │   │   ├── Known.php
│   │       │   │   │   ├── Large.php
│   │       │   │   │   ├── Medium.php
│   │       │   │   │   ├── Small.php
│   │       │   │   │   ├── TestSize.php
│   │       │   │   │   └── Unknown.php
│   │       │   │   ├── TestStatus
│   │       │   │   │   ├── Deprecation.php
│   │       │   │   │   ├── Error.php
│   │       │   │   │   ├── Failure.php
│   │       │   │   │   ├── Incomplete.php
│   │       │   │   │   ├── Known.php
│   │       │   │   │   ├── Notice.php
│   │       │   │   │   ├── Risky.php
│   │       │   │   │   ├── Skipped.php
│   │       │   │   │   ├── Success.php
│   │       │   │   │   ├── TestStatus.php
│   │       │   │   │   ├── Unknown.php
│   │       │   │   │   └── Warning.php
│   │       │   │   ├── Assert.php
│   │       │   │   ├── DataProviderTestSuite.php
│   │       │   │   ├── ExecutionOrderDependency.php
│   │       │   │   ├── NativeType.php
│   │       │   │   ├── Reorderable.php
│   │       │   │   ├── SelfDescribing.php
│   │       │   │   ├── Test.php
│   │       │   │   ├── TestBuilder.php
│   │       │   │   ├── TestCase.php
│   │       │   │   ├── TestSuite.php
│   │       │   │   └── TestSuiteIterator.php
│   │       │   ├── Logging
│   │       │   │   ├── JUnit
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   ├── TestErroredSubscriber.php
│   │       │   │   │   │   ├── TestFailedSubscriber.php
│   │       │   │   │   │   ├── TestFinishedSubscriber.php
│   │       │   │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │       │   │   │   │   ├── TestPreparationFailedSubscriber.php
│   │       │   │   │   │   ├── TestPreparationStartedSubscriber.php
│   │       │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   ├── TestPrintedUnexpectedOutputSubscriber.php
│   │       │   │   │   │   ├── TestRunnerExecutionFinishedSubscriber.php
│   │       │   │   │   │   ├── TestSkippedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │       │   │   │   │   └── TestSuiteStartedSubscriber.php
│   │       │   │   │   └── JunitXmlLogger.php
│   │       │   │   ├── TeamCity
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   ├── TestConsideredRiskySubscriber.php
│   │       │   │   │   │   ├── TestErroredSubscriber.php
│   │       │   │   │   │   ├── TestFailedSubscriber.php
│   │       │   │   │   │   ├── TestFinishedSubscriber.php
│   │       │   │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │       │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   ├── TestRunnerExecutionFinishedSubscriber.php
│   │       │   │   │   │   ├── TestSkippedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteBeforeFirstTestMethodErroredSubscriber.php
│   │       │   │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteSkippedSubscriber.php
│   │       │   │   │   │   └── TestSuiteStartedSubscriber.php
│   │       │   │   │   └── TeamCityLogger.php
│   │       │   │   ├── TestDox
│   │       │   │   │   ├── TestResult
│   │       │   │   │   │   ├── Subscriber
│   │       │   │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   │   ├── TestConsideredRiskySubscriber.php
│   │       │   │   │   │   │   ├── TestErroredSubscriber.php
│   │       │   │   │   │   │   ├── TestFailedSubscriber.php
│   │       │   │   │   │   │   ├── TestFinishedSubscriber.php
│   │       │   │   │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │       │   │   │   │   │   ├── TestPassedSubscriber.php
│   │       │   │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   │   ├── TestSkippedSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredPhpunitErrorSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │       │   │   │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │       │   │   │   │   │   └── TestTriggeredWarningSubscriber.php
│   │       │   │   │   │   ├── TestResult.php
│   │       │   │   │   │   ├── TestResultCollection.php
│   │       │   │   │   │   ├── TestResultCollectionIterator.php
│   │       │   │   │   │   └── TestResultCollector.php
│   │       │   │   │   ├── HtmlRenderer.php
│   │       │   │   │   ├── NamePrettifier.php
│   │       │   │   │   └── PlainTextRenderer.php
│   │       │   │   └── EventLogger.php
│   │       │   ├── Metadata
│   │       │   │   ├── Api
│   │       │   │   │   ├── CodeCoverage.php
│   │       │   │   │   ├── DataProvider.php
│   │       │   │   │   ├── Dependencies.php
│   │       │   │   │   ├── Groups.php
│   │       │   │   │   ├── HookMethods.php
│   │       │   │   │   └── Requirements.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── AnnotationsAreNotSupportedForInternalClassesException.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── InvalidAttributeException.php
│   │       │   │   │   ├── InvalidVersionRequirementException.php
│   │       │   │   │   ├── NoVersionRequirementException.php
│   │       │   │   │   └── ReflectionException.php
│   │       │   │   ├── Parser
│   │       │   │   │   ├── Annotation
│   │       │   │   │   │   ├── DocBlock.php
│   │       │   │   │   │   └── Registry.php
│   │       │   │   │   ├── AnnotationParser.php
│   │       │   │   │   ├── AttributeParser.php
│   │       │   │   │   ├── CachingParser.php
│   │       │   │   │   ├── Parser.php
│   │       │   │   │   ├── ParserChain.php
│   │       │   │   │   └── Registry.php
│   │       │   │   ├── Version
│   │       │   │   │   ├── ComparisonRequirement.php
│   │       │   │   │   ├── ConstraintRequirement.php
│   │       │   │   │   └── Requirement.php
│   │       │   │   ├── After.php
│   │       │   │   ├── AfterClass.php
│   │       │   │   ├── BackupGlobals.php
│   │       │   │   ├── BackupStaticProperties.php
│   │       │   │   ├── Before.php
│   │       │   │   ├── BeforeClass.php
│   │       │   │   ├── Covers.php
│   │       │   │   ├── CoversClass.php
│   │       │   │   ├── CoversDefaultClass.php
│   │       │   │   ├── CoversFunction.php
│   │       │   │   ├── CoversMethod.php
│   │       │   │   ├── CoversNothing.php
│   │       │   │   ├── CoversTrait.php
│   │       │   │   ├── DataProvider.php
│   │       │   │   ├── DependsOnClass.php
│   │       │   │   ├── DependsOnMethod.php
│   │       │   │   ├── DisableReturnValueGenerationForTestDoubles.php
│   │       │   │   ├── DoesNotPerformAssertions.php
│   │       │   │   ├── ExcludeGlobalVariableFromBackup.php
│   │       │   │   ├── ExcludeStaticPropertyFromBackup.php
│   │       │   │   ├── Group.php
│   │       │   │   ├── IgnoreDeprecations.php
│   │       │   │   ├── IgnorePhpunitDeprecations.php
│   │       │   │   ├── Metadata.php
│   │       │   │   ├── MetadataCollection.php
│   │       │   │   ├── MetadataCollectionIterator.php
│   │       │   │   ├── PostCondition.php
│   │       │   │   ├── PreCondition.php
│   │       │   │   ├── PreserveGlobalState.php
│   │       │   │   ├── RequiresFunction.php
│   │       │   │   ├── RequiresMethod.php
│   │       │   │   ├── RequiresOperatingSystem.php
│   │       │   │   ├── RequiresOperatingSystemFamily.php
│   │       │   │   ├── RequiresPhp.php
│   │       │   │   ├── RequiresPhpExtension.php
│   │       │   │   ├── RequiresPhpunit.php
│   │       │   │   ├── RequiresPhpunitExtension.php
│   │       │   │   ├── RequiresSetting.php
│   │       │   │   ├── RunClassInSeparateProcess.php
│   │       │   │   ├── RunInSeparateProcess.php
│   │       │   │   ├── RunTestsInSeparateProcesses.php
│   │       │   │   ├── Test.php
│   │       │   │   ├── TestDox.php
│   │       │   │   ├── TestWith.php
│   │       │   │   ├── Uses.php
│   │       │   │   ├── UsesClass.php
│   │       │   │   ├── UsesDefaultClass.php
│   │       │   │   ├── UsesFunction.php
│   │       │   │   ├── UsesMethod.php
│   │       │   │   ├── UsesTrait.php
│   │       │   │   └── WithoutErrorHandler.php
│   │       │   ├── Runner
│   │       │   │   ├── Baseline
│   │       │   │   │   ├── Exception
│   │       │   │   │   │   ├── CannotLoadBaselineException.php
│   │       │   │   │   │   └── FileDoesNotHaveLineException.php
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │       │   │   │   │   └── TestTriggeredWarningSubscriber.php
│   │       │   │   │   ├── Baseline.php
│   │       │   │   │   ├── Generator.php
│   │       │   │   │   ├── Issue.php
│   │       │   │   │   ├── Reader.php
│   │       │   │   │   ├── RelativePathCalculator.php
│   │       │   │   │   └── Writer.php
│   │       │   │   ├── DeprecationCollector
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   └── TestTriggeredDeprecationSubscriber.php
│   │       │   │   │   ├── Collector.php
│   │       │   │   │   └── Facade.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── ClassCannotBeFoundException.php
│   │       │   │   │   ├── ClassDoesNotExtendTestCaseException.php
│   │       │   │   │   ├── ClassIsAbstractException.php
│   │       │   │   │   ├── DirectoryDoesNotExistException.php
│   │       │   │   │   ├── ErrorException.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── FileDoesNotExistException.php
│   │       │   │   │   ├── InvalidOrderException.php
│   │       │   │   │   ├── InvalidPhptFileException.php
│   │       │   │   │   ├── ParameterDoesNotExistException.php
│   │       │   │   │   ├── PhptExternalFileCannotBeLoadedException.php
│   │       │   │   │   └── UnsupportedPhptSectionException.php
│   │       │   │   ├── Extension
│   │       │   │   │   ├── Extension.php
│   │       │   │   │   ├── ExtensionBootstrapper.php
│   │       │   │   │   ├── Facade.php
│   │       │   │   │   ├── ParameterCollection.php
│   │       │   │   │   └── PharLoader.php
│   │       │   │   ├── Filter
│   │       │   │   │   ├── ExcludeGroupFilterIterator.php
│   │       │   │   │   ├── ExcludeNameFilterIterator.php
│   │       │   │   │   ├── Factory.php
│   │       │   │   │   ├── GroupFilterIterator.php
│   │       │   │   │   ├── IncludeGroupFilterIterator.php
│   │       │   │   │   ├── IncludeNameFilterIterator.php
│   │       │   │   │   ├── NameFilterIterator.php
│   │       │   │   │   └── TestIdFilterIterator.php
│   │       │   │   ├── GarbageCollection
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── ExecutionFinishedSubscriber.php
│   │       │   │   │   │   ├── ExecutionStartedSubscriber.php
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   └── TestFinishedSubscriber.php
│   │       │   │   │   └── GarbageCollectionHandler.php
│   │       │   │   ├── HookMethod
│   │       │   │   │   ├── HookMethod.php
│   │       │   │   │   └── HookMethodCollection.php
│   │       │   │   ├── PHPT
│   │       │   │   │   ├── templates
│   │       │   │   │   │   └── phpt.tpl
│   │       │   │   │   └── PhptTestCase.php
│   │       │   │   ├── ResultCache
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   ├── TestConsideredRiskySubscriber.php
│   │       │   │   │   │   ├── TestErroredSubscriber.php
│   │       │   │   │   │   ├── TestFailedSubscriber.php
│   │       │   │   │   │   ├── TestFinishedSubscriber.php
│   │       │   │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │       │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   ├── TestSkippedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │       │   │   │   │   └── TestSuiteStartedSubscriber.php
│   │       │   │   │   ├── DefaultResultCache.php
│   │       │   │   │   ├── NullResultCache.php
│   │       │   │   │   ├── ResultCache.php
│   │       │   │   │   └── ResultCacheHandler.php
│   │       │   │   ├── TestResult
│   │       │   │   │   ├── Subscriber
│   │       │   │   │   │   ├── AfterTestClassMethodErroredSubscriber.php
│   │       │   │   │   │   ├── BeforeTestClassMethodErroredSubscriber.php
│   │       │   │   │   │   ├── ExecutionStartedSubscriber.php
│   │       │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   ├── TestConsideredRiskySubscriber.php
│   │       │   │   │   │   ├── TestErroredSubscriber.php
│   │       │   │   │   │   ├── TestFailedSubscriber.php
│   │       │   │   │   │   ├── TestFinishedSubscriber.php
│   │       │   │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │       │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   ├── TestRunnerTriggeredDeprecationSubscriber.php
│   │       │   │   │   │   ├── TestRunnerTriggeredWarningSubscriber.php
│   │       │   │   │   │   ├── TestSkippedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteSkippedSubscriber.php
│   │       │   │   │   │   ├── TestSuiteStartedSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredErrorSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpunitErrorSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │       │   │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │       │   │   │   │   └── TestTriggeredWarningSubscriber.php
│   │       │   │   │   ├── Collector.php
│   │       │   │   │   ├── Facade.php
│   │       │   │   │   ├── Issue.php
│   │       │   │   │   ├── PassedTests.php
│   │       │   │   │   └── TestResult.php
│   │       │   │   ├── CodeCoverage.php
│   │       │   │   ├── ErrorHandler.php
│   │       │   │   ├── IssueFilter.php
│   │       │   │   ├── TestSuiteLoader.php
│   │       │   │   ├── TestSuiteSorter.php
│   │       │   │   └── Version.php
│   │       │   ├── TextUI
│   │       │   │   ├── Command
│   │       │   │   │   ├── Commands
│   │       │   │   │   │   ├── AtLeastVersionCommand.php
│   │       │   │   │   │   ├── GenerateConfigurationCommand.php
│   │       │   │   │   │   ├── ListGroupsCommand.php
│   │       │   │   │   │   ├── ListTestFilesCommand.php
│   │       │   │   │   │   ├── ListTestsAsTextCommand.php
│   │       │   │   │   │   ├── ListTestsAsXmlCommand.php
│   │       │   │   │   │   ├── ListTestSuitesCommand.php
│   │       │   │   │   │   ├── MigrateConfigurationCommand.php
│   │       │   │   │   │   ├── ShowHelpCommand.php
│   │       │   │   │   │   ├── ShowVersionCommand.php
│   │       │   │   │   │   ├── VersionCheckCommand.php
│   │       │   │   │   │   └── WarmCodeCoverageCacheCommand.php
│   │       │   │   │   ├── Command.php
│   │       │   │   │   └── Result.php
│   │       │   │   ├── Configuration
│   │       │   │   │   ├── Cli
│   │       │   │   │   │   ├── Builder.php
│   │       │   │   │   │   ├── Configuration.php
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   └── XmlConfigurationFileFinder.php
│   │       │   │   │   ├── Exception
│   │       │   │   │   │   ├── CannotFindSchemaException.php
│   │       │   │   │   │   ├── CodeCoverageReportNotConfiguredException.php
│   │       │   │   │   │   ├── ConfigurationCannotBeBuiltException.php
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   ├── FilterNotConfiguredException.php
│   │       │   │   │   │   ├── LoggingNotConfiguredException.php
│   │       │   │   │   │   ├── NoBaselineException.php
│   │       │   │   │   │   ├── NoBootstrapException.php
│   │       │   │   │   │   ├── NoCacheDirectoryException.php
│   │       │   │   │   │   ├── NoConfigurationFileException.php
│   │       │   │   │   │   ├── NoCoverageCacheDirectoryException.php
│   │       │   │   │   │   ├── NoCustomCssFileException.php
│   │       │   │   │   │   ├── NoDefaultTestSuiteException.php
│   │       │   │   │   │   ├── NoPharExtensionDirectoryException.php
│   │       │   │   │   │   └── SpecificDeprecationToStopOnNotConfiguredException.php
│   │       │   │   │   ├── Value
│   │       │   │   │   │   ├── Constant.php
│   │       │   │   │   │   ├── ConstantCollection.php
│   │       │   │   │   │   ├── ConstantCollectionIterator.php
│   │       │   │   │   │   ├── Directory.php
│   │       │   │   │   │   ├── DirectoryCollection.php
│   │       │   │   │   │   ├── DirectoryCollectionIterator.php
│   │       │   │   │   │   ├── ExtensionBootstrap.php
│   │       │   │   │   │   ├── ExtensionBootstrapCollection.php
│   │       │   │   │   │   ├── ExtensionBootstrapCollectionIterator.php
│   │       │   │   │   │   ├── File.php
│   │       │   │   │   │   ├── FileCollection.php
│   │       │   │   │   │   ├── FileCollectionIterator.php
│   │       │   │   │   │   ├── FilterDirectory.php
│   │       │   │   │   │   ├── FilterDirectoryCollection.php
│   │       │   │   │   │   ├── FilterDirectoryCollectionIterator.php
│   │       │   │   │   │   ├── Group.php
│   │       │   │   │   │   ├── GroupCollection.php
│   │       │   │   │   │   ├── GroupCollectionIterator.php
│   │       │   │   │   │   ├── IniSetting.php
│   │       │   │   │   │   ├── IniSettingCollection.php
│   │       │   │   │   │   ├── IniSettingCollectionIterator.php
│   │       │   │   │   │   ├── Php.php
│   │       │   │   │   │   ├── Source.php
│   │       │   │   │   │   ├── TestDirectory.php
│   │       │   │   │   │   ├── TestDirectoryCollection.php
│   │       │   │   │   │   ├── TestDirectoryCollectionIterator.php
│   │       │   │   │   │   ├── TestFile.php
│   │       │   │   │   │   ├── TestFileCollection.php
│   │       │   │   │   │   ├── TestFileCollectionIterator.php
│   │       │   │   │   │   ├── TestSuite.php
│   │       │   │   │   │   ├── TestSuiteCollection.php
│   │       │   │   │   │   ├── TestSuiteCollectionIterator.php
│   │       │   │   │   │   ├── Variable.php
│   │       │   │   │   │   ├── VariableCollection.php
│   │       │   │   │   │   └── VariableCollectionIterator.php
│   │       │   │   │   ├── Xml
│   │       │   │   │   │   ├── CodeCoverage
│   │       │   │   │   │   │   ├── Report
│   │       │   │   │   │   │   │   ├── Clover.php
│   │       │   │   │   │   │   │   ├── Cobertura.php
│   │       │   │   │   │   │   │   ├── Crap4j.php
│   │       │   │   │   │   │   │   ├── Html.php
│   │       │   │   │   │   │   │   ├── Php.php
│   │       │   │   │   │   │   │   ├── Text.php
│   │       │   │   │   │   │   │   └── Xml.php
│   │       │   │   │   │   │   └── CodeCoverage.php
│   │       │   │   │   │   ├── Logging
│   │       │   │   │   │   │   ├── TestDox
│   │       │   │   │   │   │   │   ├── Html.php
│   │       │   │   │   │   │   │   └── Text.php
│   │       │   │   │   │   │   ├── Junit.php
│   │       │   │   │   │   │   ├── Logging.php
│   │       │   │   │   │   │   └── TeamCity.php
│   │       │   │   │   │   ├── Migration
│   │       │   │   │   │   │   ├── Migrations
│   │       │   │   │   │   │   │   ├── ConvertLogTypes.php
│   │       │   │   │   │   │   │   ├── CoverageCloverToReport.php
│   │       │   │   │   │   │   │   ├── CoverageCrap4jToReport.php
│   │       │   │   │   │   │   │   ├── CoverageHtmlToReport.php
│   │       │   │   │   │   │   │   ├── CoveragePhpToReport.php
│   │       │   │   │   │   │   │   ├── CoverageTextToReport.php
│   │       │   │   │   │   │   │   ├── CoverageXmlToReport.php
│   │       │   │   │   │   │   │   ├── IntroduceCacheDirectoryAttribute.php
│   │       │   │   │   │   │   │   ├── IntroduceCoverageElement.php
│   │       │   │   │   │   │   │   ├── LogToReportMigration.php
│   │       │   │   │   │   │   │   ├── Migration.php
│   │       │   │   │   │   │   │   ├── MoveAttributesFromFilterWhitelistToCoverage.php
│   │       │   │   │   │   │   │   ├── MoveAttributesFromRootToCoverage.php
│   │       │   │   │   │   │   │   ├── MoveCoverageDirectoriesToSource.php
│   │       │   │   │   │   │   │   ├── MoveWhitelistExcludesToCoverage.php
│   │       │   │   │   │   │   │   ├── MoveWhitelistIncludesToCoverage.php
│   │       │   │   │   │   │   │   ├── RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveCacheResultFileAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveCacheTokensAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveConversionToExceptionsAttributes.php
│   │       │   │   │   │   │   │   ├── RemoveCoverageElementCacheDirectoryAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveCoverageElementProcessUncoveredFilesAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveEmptyFilter.php
│   │       │   │   │   │   │   │   ├── RemoveListeners.php
│   │       │   │   │   │   │   │   ├── RemoveLoggingElements.php
│   │       │   │   │   │   │   │   ├── RemoveLogTypes.php
│   │       │   │   │   │   │   │   ├── RemoveNoInteractionAttribute.php
│   │       │   │   │   │   │   │   ├── RemovePrinterAttributes.php
│   │       │   │   │   │   │   │   ├── RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute.php
│   │       │   │   │   │   │   │   ├── RemoveTestDoxGroupsElement.php
│   │       │   │   │   │   │   │   ├── RemoveTestSuiteLoaderAttributes.php
│   │       │   │   │   │   │   │   ├── RemoveVerboseAttribute.php
│   │       │   │   │   │   │   │   ├── RenameBackupStaticAttributesAttribute.php
│   │       │   │   │   │   │   │   ├── RenameBeStrictAboutCoversAnnotationAttribute.php
│   │       │   │   │   │   │   │   ├── RenameForceCoversAnnotationAttribute.php
│   │       │   │   │   │   │   │   ├── ReplaceRestrictDeprecationsWithIgnoreDeprecations.php
│   │       │   │   │   │   │   │   └── UpdateSchemaLocation.php
│   │       │   │   │   │   │   ├── MigrationBuilder.php
│   │       │   │   │   │   │   ├── MigrationException.php
│   │       │   │   │   │   │   ├── Migrator.php
│   │       │   │   │   │   │   └── SnapshotNodeList.php
│   │       │   │   │   │   ├── SchemaDetector
│   │       │   │   │   │   │   ├── FailedSchemaDetectionResult.php
│   │       │   │   │   │   │   ├── SchemaDetectionResult.php
│   │       │   │   │   │   │   ├── SchemaDetector.php
│   │       │   │   │   │   │   └── SuccessfulSchemaDetectionResult.php
│   │       │   │   │   │   ├── Validator
│   │       │   │   │   │   │   ├── ValidationResult.php
│   │       │   │   │   │   │   └── Validator.php
│   │       │   │   │   │   ├── Configuration.php
│   │       │   │   │   │   ├── DefaultConfiguration.php
│   │       │   │   │   │   ├── Exception.php
│   │       │   │   │   │   ├── Generator.php
│   │       │   │   │   │   ├── Groups.php
│   │       │   │   │   │   ├── LoadedFromFileConfiguration.php
│   │       │   │   │   │   ├── Loader.php
│   │       │   │   │   │   ├── PHPUnit.php
│   │       │   │   │   │   ├── SchemaFinder.php
│   │       │   │   │   │   └── TestSuiteMapper.php
│   │       │   │   │   ├── Builder.php
│   │       │   │   │   ├── CodeCoverageFilterRegistry.php
│   │       │   │   │   ├── Configuration.php
│   │       │   │   │   ├── Merger.php
│   │       │   │   │   ├── PhpHandler.php
│   │       │   │   │   ├── Registry.php
│   │       │   │   │   ├── SourceFilter.php
│   │       │   │   │   ├── SourceMapper.php
│   │       │   │   │   └── TestSuiteBuilder.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── CannotOpenSocketException.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── InvalidSocketException.php
│   │       │   │   │   ├── RuntimeException.php
│   │       │   │   │   ├── TestDirectoryNotFoundException.php
│   │       │   │   │   └── TestFileNotFoundException.php
│   │       │   │   ├── Output
│   │       │   │   │   ├── Default
│   │       │   │   │   │   ├── ProgressPrinter
│   │       │   │   │   │   │   ├── Subscriber
│   │       │   │   │   │   │   │   ├── BeforeTestClassMethodErroredSubscriber.php
│   │       │   │   │   │   │   │   ├── Subscriber.php
│   │       │   │   │   │   │   │   ├── TestConsideredRiskySubscriber.php
│   │       │   │   │   │   │   │   ├── TestErroredSubscriber.php
│   │       │   │   │   │   │   │   ├── TestFailedSubscriber.php
│   │       │   │   │   │   │   │   ├── TestFinishedSubscriber.php
│   │       │   │   │   │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │       │   │   │   │   │   │   ├── TestPreparedSubscriber.php
│   │       │   │   │   │   │   │   ├── TestRunnerExecutionStartedSubscriber.php
│   │       │   │   │   │   │   │   ├── TestSkippedSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredErrorSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │       │   │   │   │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │       │   │   │   │   │   │   └── TestTriggeredWarningSubscriber.php
│   │       │   │   │   │   │   └── ProgressPrinter.php
│   │       │   │   │   │   ├── ResultPrinter.php
│   │       │   │   │   │   └── UnexpectedOutputPrinter.php
│   │       │   │   │   ├── Printer
│   │       │   │   │   │   ├── DefaultPrinter.php
│   │       │   │   │   │   ├── NullPrinter.php
│   │       │   │   │   │   └── Printer.php
│   │       │   │   │   ├── TestDox
│   │       │   │   │   │   └── ResultPrinter.php
│   │       │   │   │   ├── Facade.php
│   │       │   │   │   └── SummaryPrinter.php
│   │       │   │   ├── Application.php
│   │       │   │   ├── Help.php
│   │       │   │   ├── ShellExitCodeCalculator.php
│   │       │   │   ├── TestRunner.php
│   │       │   │   └── TestSuiteFilterProcessor.php
│   │       │   ├── Util
│   │       │   │   ├── Exception
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── InvalidDirectoryException.php
│   │       │   │   │   ├── InvalidJsonException.php
│   │       │   │   │   ├── InvalidVersionOperatorException.php
│   │       │   │   │   ├── PhpProcessException.php
│   │       │   │   │   └── XmlException.php
│   │       │   │   ├── Http
│   │       │   │   │   ├── Downloader.php
│   │       │   │   │   └── PhpDownloader.php
│   │       │   │   ├── PHP
│   │       │   │   │   ├── DefaultJobRunner.php
│   │       │   │   │   ├── Job.php
│   │       │   │   │   ├── JobRunner.php
│   │       │   │   │   ├── JobRunnerRegistry.php
│   │       │   │   │   └── Result.php
│   │       │   │   ├── Xml
│   │       │   │   │   ├── Loader.php
│   │       │   │   │   └── Xml.php
│   │       │   │   ├── Cloner.php
│   │       │   │   ├── Color.php
│   │       │   │   ├── ExcludeList.php
│   │       │   │   ├── Exporter.php
│   │       │   │   ├── Filesystem.php
│   │       │   │   ├── Filter.php
│   │       │   │   ├── GlobalState.php
│   │       │   │   ├── Json.php
│   │       │   │   ├── Reflection.php
│   │       │   │   ├── Test.php
│   │       │   │   ├── ThrowableToStringMapper.php
│   │       │   │   └── VersionComparisonOperator.php
│   │       │   └── Exception.php
│   │       ├── ChangeLog-11.5.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── DEPRECATIONS.md
│   │       ├── LICENSE
│   │       ├── phpunit
│   │       ├── phpunit.xsd
│   │       ├── README.md
│   │       └── SECURITY.md
│   ├── psr
│   │   ├── clock
│   │   │   ├── src
│   │   │   │   └── ClockInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── container
│   │   │   ├── src
│   │   │   │   ├── ContainerExceptionInterface.php
│   │   │   │   ├── ContainerInterface.php
│   │   │   │   └── NotFoundExceptionInterface.php
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── event-dispatcher
│   │   │   ├── src
│   │   │   │   ├── EventDispatcherInterface.php
│   │   │   │   ├── ListenerProviderInterface.php
│   │   │   │   └── StoppableEventInterface.php
│   │   │   ├── .editorconfig
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── http-client
│   │   │   ├── src
│   │   │   │   ├── ClientExceptionInterface.php
│   │   │   │   ├── ClientInterface.php
│   │   │   │   ├── NetworkExceptionInterface.php
│   │   │   │   └── RequestExceptionInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── http-factory
│   │   │   ├── src
│   │   │   │   ├── RequestFactoryInterface.php
│   │   │   │   ├── ResponseFactoryInterface.php
│   │   │   │   ├── ServerRequestFactoryInterface.php
│   │   │   │   ├── StreamFactoryInterface.php
│   │   │   │   ├── UploadedFileFactoryInterface.php
│   │   │   │   └── UriFactoryInterface.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── http-message
│   │   │   ├── docs
│   │   │   │   ├── PSR7-Interfaces.md
│   │   │   │   └── PSR7-Usage.md
│   │   │   ├── src
│   │   │   │   ├── MessageInterface.php
│   │   │   │   ├── RequestInterface.php
│   │   │   │   ├── ResponseInterface.php
│   │   │   │   ├── ServerRequestInterface.php
│   │   │   │   ├── StreamInterface.php
│   │   │   │   ├── UploadedFileInterface.php
│   │   │   │   └── UriInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── log
│   │   │   ├── src
│   │   │   │   ├── AbstractLogger.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LoggerAwareInterface.php
│   │   │   │   ├── LoggerAwareTrait.php
│   │   │   │   ├── LoggerInterface.php
│   │   │   │   ├── LoggerTrait.php
│   │   │   │   ├── LogLevel.php
│   │   │   │   └── NullLogger.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   └── simple-cache
│   │       ├── src
│   │       │   ├── CacheException.php
│   │       │   ├── CacheInterface.php
│   │       │   └── InvalidArgumentException.php
│   │       ├── .editorconfig
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       └── README.md
│   ├── psy
│   │   └── psysh
│   │       ├── bin
│   │       │   └── psysh
│   │       ├── src
│   │       │   ├── CodeCleaner
│   │       │   │   ├── AbstractClassPass.php
│   │       │   │   ├── AssignThisVariablePass.php
│   │       │   │   ├── CalledClassPass.php
│   │       │   │   ├── CallTimePassByReferencePass.php
│   │       │   │   ├── CodeCleanerPass.php
│   │       │   │   ├── EmptyArrayDimFetchPass.php
│   │       │   │   ├── ExitPass.php
│   │       │   │   ├── FinalClassPass.php
│   │       │   │   ├── FunctionContextPass.php
│   │       │   │   ├── FunctionReturnInWriteContextPass.php
│   │       │   │   ├── ImplicitReturnPass.php
│   │       │   │   ├── IssetPass.php
│   │       │   │   ├── LabelContextPass.php
│   │       │   │   ├── LeavePsyshAlonePass.php
│   │       │   │   ├── ListPass.php
│   │       │   │   ├── LoopContextPass.php
│   │       │   │   ├── MagicConstantsPass.php
│   │       │   │   ├── NamespaceAwarePass.php
│   │       │   │   ├── NamespacePass.php
│   │       │   │   ├── NoReturnValue.php
│   │       │   │   ├── PassableByReferencePass.php
│   │       │   │   ├── RequirePass.php
│   │       │   │   ├── ReturnTypePass.php
│   │       │   │   ├── StrictTypesPass.php
│   │       │   │   ├── UseStatementPass.php
│   │       │   │   ├── ValidClassNamePass.php
│   │       │   │   ├── ValidConstructorPass.php
│   │       │   │   └── ValidFunctionNamePass.php
│   │       │   ├── Command
│   │       │   │   ├── ListCommand
│   │       │   │   │   ├── ClassConstantEnumerator.php
│   │       │   │   │   ├── ClassEnumerator.php
│   │       │   │   │   ├── ConstantEnumerator.php
│   │       │   │   │   ├── Enumerator.php
│   │       │   │   │   ├── FunctionEnumerator.php
│   │       │   │   │   ├── GlobalVariableEnumerator.php
│   │       │   │   │   ├── MethodEnumerator.php
│   │       │   │   │   ├── PropertyEnumerator.php
│   │       │   │   │   └── VariableEnumerator.php
│   │       │   │   ├── TimeitCommand
│   │       │   │   │   └── TimeitVisitor.php
│   │       │   │   ├── BufferCommand.php
│   │       │   │   ├── ClearCommand.php
│   │       │   │   ├── CodeArgumentParser.php
│   │       │   │   ├── Command.php
│   │       │   │   ├── DocCommand.php
│   │       │   │   ├── DumpCommand.php
│   │       │   │   ├── EditCommand.php
│   │       │   │   ├── ExitCommand.php
│   │       │   │   ├── HelpCommand.php
│   │       │   │   ├── HistoryCommand.php
│   │       │   │   ├── ListCommand.php
│   │       │   │   ├── ParseCommand.php
│   │       │   │   ├── PsyVersionCommand.php
│   │       │   │   ├── ReflectingCommand.php
│   │       │   │   ├── ShowCommand.php
│   │       │   │   ├── SudoCommand.php
│   │       │   │   ├── ThrowUpCommand.php
│   │       │   │   ├── TimeitCommand.php
│   │       │   │   ├── TraceCommand.php
│   │       │   │   ├── WhereamiCommand.php
│   │       │   │   └── WtfCommand.php
│   │       │   ├── Exception
│   │       │   │   ├── BreakException.php
│   │       │   │   ├── DeprecatedException.php
│   │       │   │   ├── ErrorException.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── FatalErrorException.php
│   │       │   │   ├── ParseErrorException.php
│   │       │   │   ├── RuntimeException.php
│   │       │   │   ├── ThrowUpException.php
│   │       │   │   └── UnexpectedTargetException.php
│   │       │   ├── ExecutionLoop
│   │       │   │   ├── AbstractListener.php
│   │       │   │   ├── Listener.php
│   │       │   │   ├── ProcessForker.php
│   │       │   │   └── RunkitReloader.php
│   │       │   ├── Formatter
│   │       │   │   ├── CodeFormatter.php
│   │       │   │   ├── DocblockFormatter.php
│   │       │   │   ├── ReflectorFormatter.php
│   │       │   │   ├── SignatureFormatter.php
│   │       │   │   └── TraceFormatter.php
│   │       │   ├── Input
│   │       │   │   ├── CodeArgument.php
│   │       │   │   ├── FilterOptions.php
│   │       │   │   ├── ShellInput.php
│   │       │   │   └── SilentInput.php
│   │       │   ├── Output
│   │       │   │   ├── OutputPager.php
│   │       │   │   ├── PassthruPager.php
│   │       │   │   ├── ProcOutputPager.php
│   │       │   │   ├── ShellOutput.php
│   │       │   │   └── Theme.php
│   │       │   ├── Readline
│   │       │   │   ├── Hoa
│   │       │   │   │   ├── Terminfo
│   │       │   │   │   │   ├── 77
│   │       │   │   │   │   │   └── windows-ansi
│   │       │   │   │   │   └── 78
│   │       │   │   │   │       ├── xterm
│   │       │   │   │   │       └── xterm-256color
│   │       │   │   │   ├── Autocompleter.php
│   │       │   │   │   ├── AutocompleterAggregate.php
│   │       │   │   │   ├── AutocompleterPath.php
│   │       │   │   │   ├── AutocompleterWord.php
│   │       │   │   │   ├── Console.php
│   │       │   │   │   ├── ConsoleCursor.php
│   │       │   │   │   ├── ConsoleException.php
│   │       │   │   │   ├── ConsoleInput.php
│   │       │   │   │   ├── ConsoleOutput.php
│   │       │   │   │   ├── ConsoleProcessus.php
│   │       │   │   │   ├── ConsoleTput.php
│   │       │   │   │   ├── ConsoleWindow.php
│   │       │   │   │   ├── Event.php
│   │       │   │   │   ├── EventBucket.php
│   │       │   │   │   ├── EventException.php
│   │       │   │   │   ├── EventListenable.php
│   │       │   │   │   ├── EventListener.php
│   │       │   │   │   ├── EventListens.php
│   │       │   │   │   ├── EventSource.php
│   │       │   │   │   ├── Exception.php
│   │       │   │   │   ├── ExceptionIdle.php
│   │       │   │   │   ├── File.php
│   │       │   │   │   ├── FileDirectory.php
│   │       │   │   │   ├── FileDoesNotExistException.php
│   │       │   │   │   ├── FileException.php
│   │       │   │   │   ├── FileFinder.php
│   │       │   │   │   ├── FileGeneric.php
│   │       │   │   │   ├── FileLink.php
│   │       │   │   │   ├── FileLinkRead.php
│   │       │   │   │   ├── FileLinkReadWrite.php
│   │       │   │   │   ├── FileRead.php
│   │       │   │   │   ├── FileReadWrite.php
│   │       │   │   │   ├── IStream.php
│   │       │   │   │   ├── IteratorFileSystem.php
│   │       │   │   │   ├── IteratorRecursiveDirectory.php
│   │       │   │   │   ├── IteratorSplFileInfo.php
│   │       │   │   │   ├── Protocol.php
│   │       │   │   │   ├── ProtocolException.php
│   │       │   │   │   ├── ProtocolNode.php
│   │       │   │   │   ├── ProtocolNodeLibrary.php
│   │       │   │   │   ├── ProtocolWrapper.php
│   │       │   │   │   ├── Readline.php
│   │       │   │   │   ├── Stream.php
│   │       │   │   │   ├── StreamBufferable.php
│   │       │   │   │   ├── StreamContext.php
│   │       │   │   │   ├── StreamException.php
│   │       │   │   │   ├── StreamIn.php
│   │       │   │   │   ├── StreamLockable.php
│   │       │   │   │   ├── StreamOut.php
│   │       │   │   │   ├── StreamPathable.php
│   │       │   │   │   ├── StreamPointable.php
│   │       │   │   │   ├── StreamStatable.php
│   │       │   │   │   ├── StreamTouchable.php
│   │       │   │   │   ├── Ustring.php
│   │       │   │   │   └── Xcallable.php
│   │       │   │   ├── GNUReadline.php
│   │       │   │   ├── Libedit.php
│   │       │   │   ├── Readline.php
│   │       │   │   ├── Transient.php
│   │       │   │   └── Userland.php
│   │       │   ├── Reflection
│   │       │   │   ├── ReflectionConstant.php
│   │       │   │   ├── ReflectionLanguageConstruct.php
│   │       │   │   ├── ReflectionLanguageConstructParameter.php
│   │       │   │   └── ReflectionNamespace.php
│   │       │   ├── Sudo
│   │       │   │   └── SudoVisitor.php
│   │       │   ├── TabCompletion
│   │       │   │   ├── Matcher
│   │       │   │   │   ├── AbstractContextAwareMatcher.php
│   │       │   │   │   ├── AbstractDefaultParametersMatcher.php
│   │       │   │   │   ├── AbstractMatcher.php
│   │       │   │   │   ├── ClassAttributesMatcher.php
│   │       │   │   │   ├── ClassMethodDefaultParametersMatcher.php
│   │       │   │   │   ├── ClassMethodsMatcher.php
│   │       │   │   │   ├── ClassNamesMatcher.php
│   │       │   │   │   ├── CommandsMatcher.php
│   │       │   │   │   ├── ConstantsMatcher.php
│   │       │   │   │   ├── FunctionDefaultParametersMatcher.php
│   │       │   │   │   ├── FunctionsMatcher.php
│   │       │   │   │   ├── KeywordsMatcher.php
│   │       │   │   │   ├── MongoClientMatcher.php
│   │       │   │   │   ├── MongoDatabaseMatcher.php
│   │       │   │   │   ├── ObjectAttributesMatcher.php
│   │       │   │   │   ├── ObjectMethodDefaultParametersMatcher.php
│   │       │   │   │   ├── ObjectMethodsMatcher.php
│   │       │   │   │   └── VariablesMatcher.php
│   │       │   │   └── AutoCompleter.php
│   │       │   ├── Util
│   │       │   │   ├── Docblock.php
│   │       │   │   ├── Json.php
│   │       │   │   ├── Mirror.php
│   │       │   │   └── Str.php
│   │       │   ├── VarDumper
│   │       │   │   ├── Cloner.php
│   │       │   │   ├── Dumper.php
│   │       │   │   ├── Presenter.php
│   │       │   │   └── PresenterAware.php
│   │       │   ├── VersionUpdater
│   │       │   │   ├── Downloader
│   │       │   │   │   ├── CurlDownloader.php
│   │       │   │   │   ├── Factory.php
│   │       │   │   │   └── FileDownloader.php
│   │       │   │   ├── Checker.php
│   │       │   │   ├── Downloader.php
│   │       │   │   ├── GitHubChecker.php
│   │       │   │   ├── Installer.php
│   │       │   │   ├── IntervalChecker.php
│   │       │   │   ├── NoopChecker.php
│   │       │   │   └── SelfUpdate.php
│   │       │   ├── CodeCleaner.php
│   │       │   ├── ConfigPaths.php
│   │       │   ├── Configuration.php
│   │       │   ├── Context.php
│   │       │   ├── ContextAware.php
│   │       │   ├── EnvInterface.php
│   │       │   ├── ExecutionClosure.php
│   │       │   ├── ExecutionLoopClosure.php
│   │       │   ├── functions.php
│   │       │   ├── ParserFactory.php
│   │       │   ├── Shell.php
│   │       │   ├── Sudo.php
│   │       │   ├── SuperglobalsEnv.php
│   │       │   └── SystemEnv.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── ralouphie
│   │   └── getallheaders
│   │       ├── src
│   │       │   └── getallheaders.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── ramsey
│   │   ├── collection
│   │   │   ├── src
│   │   │   │   ├── Exception
│   │   │   │   │   ├── CollectionException.php
│   │   │   │   │   ├── CollectionMismatchException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── InvalidPropertyOrMethod.php
│   │   │   │   │   ├── NoSuchElementException.php
│   │   │   │   │   ├── OutOfBoundsException.php
│   │   │   │   │   └── UnsupportedOperationException.php
│   │   │   │   ├── Map
│   │   │   │   │   ├── AbstractMap.php
│   │   │   │   │   ├── AbstractTypedMap.php
│   │   │   │   │   ├── AssociativeArrayMap.php
│   │   │   │   │   ├── MapInterface.php
│   │   │   │   │   ├── NamedParameterMap.php
│   │   │   │   │   ├── TypedMap.php
│   │   │   │   │   └── TypedMapInterface.php
│   │   │   │   ├── Tool
│   │   │   │   │   ├── TypeTrait.php
│   │   │   │   │   ├── ValueExtractorTrait.php
│   │   │   │   │   └── ValueToStringTrait.php
│   │   │   │   ├── AbstractArray.php
│   │   │   │   ├── AbstractCollection.php
│   │   │   │   ├── AbstractSet.php
│   │   │   │   ├── ArrayInterface.php
│   │   │   │   ├── Collection.php
│   │   │   │   ├── CollectionInterface.php
│   │   │   │   ├── DoubleEndedQueue.php
│   │   │   │   ├── DoubleEndedQueueInterface.php
│   │   │   │   ├── GenericArray.php
│   │   │   │   ├── Queue.php
│   │   │   │   ├── QueueInterface.php
│   │   │   │   ├── Set.php
│   │   │   │   └── Sort.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   └── uuid
│   │       ├── src
│   │       │   ├── Builder
│   │       │   │   ├── BuilderCollection.php
│   │       │   │   ├── DefaultUuidBuilder.php
│   │       │   │   ├── DegradedUuidBuilder.php
│   │       │   │   ├── FallbackBuilder.php
│   │       │   │   └── UuidBuilderInterface.php
│   │       │   ├── Codec
│   │       │   │   ├── CodecInterface.php
│   │       │   │   ├── GuidStringCodec.php
│   │       │   │   ├── OrderedTimeCodec.php
│   │       │   │   ├── StringCodec.php
│   │       │   │   ├── TimestampFirstCombCodec.php
│   │       │   │   └── TimestampLastCombCodec.php
│   │       │   ├── Converter
│   │       │   │   ├── Number
│   │       │   │   │   ├── BigNumberConverter.php
│   │       │   │   │   ├── DegradedNumberConverter.php
│   │       │   │   │   └── GenericNumberConverter.php
│   │       │   │   ├── Time
│   │       │   │   │   ├── BigNumberTimeConverter.php
│   │       │   │   │   ├── DegradedTimeConverter.php
│   │       │   │   │   ├── GenericTimeConverter.php
│   │       │   │   │   ├── PhpTimeConverter.php
│   │       │   │   │   └── UnixTimeConverter.php
│   │       │   │   ├── NumberConverterInterface.php
│   │       │   │   └── TimeConverterInterface.php
│   │       │   ├── Exception
│   │       │   │   ├── BuilderNotFoundException.php
│   │       │   │   ├── DateTimeException.php
│   │       │   │   ├── DceSecurityException.php
│   │       │   │   ├── InvalidArgumentException.php
│   │       │   │   ├── InvalidBytesException.php
│   │       │   │   ├── InvalidUuidStringException.php
│   │       │   │   ├── NameException.php
│   │       │   │   ├── NodeException.php
│   │       │   │   ├── RandomSourceException.php
│   │       │   │   ├── TimeSourceException.php
│   │       │   │   ├── UnableToBuildUuidException.php
│   │       │   │   ├── UnsupportedOperationException.php
│   │       │   │   └── UuidExceptionInterface.php
│   │       │   ├── Fields
│   │       │   │   ├── FieldsInterface.php
│   │       │   │   └── SerializableFieldsTrait.php
│   │       │   ├── Generator
│   │       │   │   ├── CombGenerator.php
│   │       │   │   ├── DceSecurityGenerator.php
│   │       │   │   ├── DceSecurityGeneratorInterface.php
│   │       │   │   ├── DefaultNameGenerator.php
│   │       │   │   ├── DefaultTimeGenerator.php
│   │       │   │   ├── NameGeneratorFactory.php
│   │       │   │   ├── NameGeneratorInterface.php
│   │       │   │   ├── PeclUuidNameGenerator.php
│   │       │   │   ├── PeclUuidRandomGenerator.php
│   │       │   │   ├── PeclUuidTimeGenerator.php
│   │       │   │   ├── RandomBytesGenerator.php
│   │       │   │   ├── RandomGeneratorFactory.php
│   │       │   │   ├── RandomGeneratorInterface.php
│   │       │   │   ├── RandomLibAdapter.php
│   │       │   │   ├── TimeGeneratorFactory.php
│   │       │   │   ├── TimeGeneratorInterface.php
│   │       │   │   └── UnixTimeGenerator.php
│   │       │   ├── Guid
│   │       │   │   ├── Fields.php
│   │       │   │   ├── Guid.php
│   │       │   │   └── GuidBuilder.php
│   │       │   ├── Lazy
│   │       │   │   └── LazyUuidFromString.php
│   │       │   ├── Math
│   │       │   │   ├── BrickMathCalculator.php
│   │       │   │   ├── CalculatorInterface.php
│   │       │   │   └── RoundingMode.php
│   │       │   ├── Nonstandard
│   │       │   │   ├── Fields.php
│   │       │   │   ├── Uuid.php
│   │       │   │   ├── UuidBuilder.php
│   │       │   │   └── UuidV6.php
│   │       │   ├── Provider
│   │       │   │   ├── Dce
│   │       │   │   │   └── SystemDceSecurityProvider.php
│   │       │   │   ├── Node
│   │       │   │   │   ├── FallbackNodeProvider.php
│   │       │   │   │   ├── NodeProviderCollection.php
│   │       │   │   │   ├── RandomNodeProvider.php
│   │       │   │   │   ├── StaticNodeProvider.php
│   │       │   │   │   └── SystemNodeProvider.php
│   │       │   │   ├── Time
│   │       │   │   │   ├── FixedTimeProvider.php
│   │       │   │   │   └── SystemTimeProvider.php
│   │       │   │   ├── DceSecurityProviderInterface.php
│   │       │   │   ├── NodeProviderInterface.php
│   │       │   │   └── TimeProviderInterface.php
│   │       │   ├── Rfc4122
│   │       │   │   ├── Fields.php
│   │       │   │   ├── FieldsInterface.php
│   │       │   │   ├── MaxTrait.php
│   │       │   │   ├── MaxUuid.php
│   │       │   │   ├── NilTrait.php
│   │       │   │   ├── NilUuid.php
│   │       │   │   ├── TimeTrait.php
│   │       │   │   ├── UuidBuilder.php
│   │       │   │   ├── UuidInterface.php
│   │       │   │   ├── UuidV1.php
│   │       │   │   ├── UuidV2.php
│   │       │   │   ├── UuidV3.php
│   │       │   │   ├── UuidV4.php
│   │       │   │   ├── UuidV5.php
│   │       │   │   ├── UuidV6.php
│   │       │   │   ├── UuidV7.php
│   │       │   │   ├── UuidV8.php
│   │       │   │   ├── Validator.php
│   │       │   │   ├── VariantTrait.php
│   │       │   │   └── VersionTrait.php
│   │       │   ├── Type
│   │       │   │   ├── Decimal.php
│   │       │   │   ├── Hexadecimal.php
│   │       │   │   ├── Integer.php
│   │       │   │   ├── NumberInterface.php
│   │       │   │   ├── Time.php
│   │       │   │   └── TypeInterface.php
│   │       │   ├── Validator
│   │       │   │   ├── GenericValidator.php
│   │       │   │   └── ValidatorInterface.php
│   │       │   ├── BinaryUtils.php
│   │       │   ├── DegradedUuid.php
│   │       │   ├── DeprecatedUuidInterface.php
│   │       │   ├── DeprecatedUuidMethodsTrait.php
│   │       │   ├── FeatureSet.php
│   │       │   ├── functions.php
│   │       │   ├── Uuid.php
│   │       │   ├── UuidFactory.php
│   │       │   ├── UuidFactoryInterface.php
│   │       │   └── UuidInterface.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── sebastian
│   │   ├── cli-parser
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── AmbiguousOptionException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── OptionDoesNotAllowArgumentException.php
│   │   │   │   │   ├── RequiredOptionArgumentMissingException.php
│   │   │   │   │   └── UnknownOptionException.php
│   │   │   │   └── Parser.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── code-unit
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidCodeUnitException.php
│   │   │   │   │   ├── NoTraitException.php
│   │   │   │   │   └── ReflectionException.php
│   │   │   │   ├── ClassMethodUnit.php
│   │   │   │   ├── ClassUnit.php
│   │   │   │   ├── CodeUnit.php
│   │   │   │   ├── CodeUnitCollection.php
│   │   │   │   ├── CodeUnitCollectionIterator.php
│   │   │   │   ├── FileUnit.php
│   │   │   │   ├── FunctionUnit.php
│   │   │   │   ├── InterfaceMethodUnit.php
│   │   │   │   ├── InterfaceUnit.php
│   │   │   │   ├── Mapper.php
│   │   │   │   ├── TraitMethodUnit.php
│   │   │   │   └── TraitUnit.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── code-unit-reverse-lookup
│   │   │   ├── src
│   │   │   │   └── Wizard.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── comparator
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   ├── ArrayComparator.php
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── ComparisonFailure.php
│   │   │   │   ├── DateTimeComparator.php
│   │   │   │   ├── DOMNodeComparator.php
│   │   │   │   ├── EnumerationComparator.php
│   │   │   │   ├── ExceptionComparator.php
│   │   │   │   ├── Factory.php
│   │   │   │   ├── MockObjectComparator.php
│   │   │   │   ├── NumberComparator.php
│   │   │   │   ├── NumericComparator.php
│   │   │   │   ├── ObjectComparator.php
│   │   │   │   ├── ResourceComparator.php
│   │   │   │   ├── ScalarComparator.php
│   │   │   │   ├── SplObjectStorageComparator.php
│   │   │   │   └── TypeComparator.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── complexity
│   │   │   ├── src
│   │   │   │   ├── Complexity
│   │   │   │   │   ├── Complexity.php
│   │   │   │   │   ├── ComplexityCollection.php
│   │   │   │   │   └── ComplexityCollectionIterator.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   ├── Visitor
│   │   │   │   │   ├── ComplexityCalculatingVisitor.php
│   │   │   │   │   └── CyclomaticComplexityCalculatingVisitor.php
│   │   │   │   └── Calculator.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── diff
│   │   │   ├── src
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ConfigurationException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── InvalidArgumentException.php
│   │   │   │   ├── Output
│   │   │   │   │   ├── AbstractChunkOutputBuilder.php
│   │   │   │   │   ├── DiffOnlyOutputBuilder.php
│   │   │   │   │   ├── DiffOutputBuilderInterface.php
│   │   │   │   │   ├── StrictUnifiedDiffOutputBuilder.php
│   │   │   │   │   └── UnifiedDiffOutputBuilder.php
│   │   │   │   ├── Chunk.php
│   │   │   │   ├── Diff.php
│   │   │   │   ├── Differ.php
│   │   │   │   ├── Line.php
│   │   │   │   ├── LongestCommonSubsequenceCalculator.php
│   │   │   │   ├── MemoryEfficientLongestCommonSubsequenceCalculator.php
│   │   │   │   ├── Parser.php
│   │   │   │   └── TimeEfficientLongestCommonSubsequenceCalculator.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── environment
│   │   │   ├── src
│   │   │   │   ├── Console.php
│   │   │   │   └── Runtime.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── exporter
│   │   │   ├── src
│   │   │   │   └── Exporter.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── global-state
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   ├── CodeExporter.php
│   │   │   │   ├── ExcludeList.php
│   │   │   │   ├── Restorer.php
│   │   │   │   └── Snapshot.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── lines-of-code
│   │   │   ├── src
│   │   │   │   ├── Exception
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── IllogicalValuesException.php
│   │   │   │   │   ├── NegativeValueException.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   ├── Counter.php
│   │   │   │   ├── LineCountingVisitor.php
│   │   │   │   └── LinesOfCode.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── object-enumerator
│   │   │   ├── src
│   │   │   │   └── Enumerator.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── object-reflector
│   │   │   ├── src
│   │   │   │   └── ObjectReflector.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── recursion-context
│   │   │   ├── src
│   │   │   │   └── Context.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   ├── type
│   │   │   ├── src
│   │   │   │   ├── exception
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   └── RuntimeException.php
│   │   │   │   ├── type
│   │   │   │   │   ├── CallableType.php
│   │   │   │   │   ├── FalseType.php
│   │   │   │   │   ├── GenericObjectType.php
│   │   │   │   │   ├── IntersectionType.php
│   │   │   │   │   ├── IterableType.php
│   │   │   │   │   ├── MixedType.php
│   │   │   │   │   ├── NeverType.php
│   │   │   │   │   ├── NullType.php
│   │   │   │   │   ├── ObjectType.php
│   │   │   │   │   ├── SimpleType.php
│   │   │   │   │   ├── StaticType.php
│   │   │   │   │   ├── TrueType.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   ├── UnionType.php
│   │   │   │   │   ├── UnknownType.php
│   │   │   │   │   └── VoidType.php
│   │   │   │   ├── Parameter.php
│   │   │   │   ├── ReflectionMapper.php
│   │   │   │   └── TypeName.php
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── infection.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SECURITY.md
│   │   └── version
│   │       ├── src
│   │       │   └── Version.php
│   │       ├── ChangeLog.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── SECURITY.md
│   ├── staabm
│   │   └── side-effects-detector
│   │       ├── lib
│   │       │   ├── functionMetadata.php
│   │       │   ├── SideEffect.php
│   │       │   └── SideEffectsDetector.php
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── stripe
│   │   └── stripe-php
│   │       ├── data
│   │       │   └── ca-certificates.crt
│   │       ├── lib
│   │       │   ├── ApiOperations
│   │       │   │   ├── All.php
│   │       │   │   ├── Create.php
│   │       │   │   ├── Delete.php
│   │       │   │   ├── NestedResource.php
│   │       │   │   ├── Request.php
│   │       │   │   ├── Retrieve.php
│   │       │   │   ├── SingletonRetrieve.php
│   │       │   │   └── Update.php
│   │       │   ├── Apps
│   │       │   │   └── Secret.php
│   │       │   ├── Billing
│   │       │   │   ├── Alert.php
│   │       │   │   ├── AlertTriggered.php
│   │       │   │   ├── CreditBalanceSummary.php
│   │       │   │   ├── CreditBalanceTransaction.php
│   │       │   │   ├── CreditGrant.php
│   │       │   │   ├── Meter.php
│   │       │   │   ├── MeterEvent.php
│   │       │   │   ├── MeterEventAdjustment.php
│   │       │   │   └── MeterEventSummary.php
│   │       │   ├── BillingPortal
│   │       │   │   ├── Configuration.php
│   │       │   │   └── Session.php
│   │       │   ├── Checkout
│   │       │   │   └── Session.php
│   │       │   ├── Climate
│   │       │   │   ├── Order.php
│   │       │   │   ├── Product.php
│   │       │   │   └── Supplier.php
│   │       │   ├── Entitlements
│   │       │   │   ├── ActiveEntitlement.php
│   │       │   │   ├── ActiveEntitlementSummary.php
│   │       │   │   └── Feature.php
│   │       │   ├── EventData
│   │       │   │   ├── V1BillingMeterErrorReportTriggeredEventData.php
│   │       │   │   └── V1BillingMeterNoMeterFoundEventData.php
│   │       │   ├── Events
│   │       │   │   ├── V1BillingMeterErrorReportTriggeredEvent.php
│   │       │   │   ├── V1BillingMeterNoMeterFoundEvent.php
│   │       │   │   └── V2CoreEventDestinationPingEvent.php
│   │       │   ├── Exception
│   │       │   │   ├── OAuth
│   │       │   │   │   ├── ExceptionInterface.php
│   │       │   │   │   ├── InvalidClientException.php
│   │       │   │   │   ├── InvalidGrantException.php
│   │       │   │   │   ├── InvalidRequestException.php
│   │       │   │   │   ├── InvalidScopeException.php
│   │       │   │   │   ├── OAuthErrorException.php
│   │       │   │   │   ├── UnknownOAuthErrorException.php
│   │       │   │   │   ├── UnsupportedGrantTypeException.php
│   │       │   │   │   └── UnsupportedResponseTypeException.php
│   │       │   │   ├── ApiConnectionException.php
│   │       │   │   ├── ApiErrorException.php
│   │       │   │   ├── AuthenticationException.php
│   │       │   │   ├── BadMethodCallException.php
│   │       │   │   ├── CardException.php
│   │       │   │   ├── ExceptionInterface.php
│   │       │   │   ├── IdempotencyException.php
│   │       │   │   ├── InvalidArgumentException.php
│   │       │   │   ├── InvalidRequestException.php
│   │       │   │   ├── PermissionException.php
│   │       │   │   ├── RateLimitException.php
│   │       │   │   ├── SignatureVerificationException.php
│   │       │   │   ├── TemporarySessionExpiredException.php
│   │       │   │   ├── UnexpectedValueException.php
│   │       │   │   └── UnknownApiErrorException.php
│   │       │   ├── FinancialConnections
│   │       │   │   ├── Account.php
│   │       │   │   ├── AccountOwner.php
│   │       │   │   ├── AccountOwnership.php
│   │       │   │   ├── Session.php
│   │       │   │   └── Transaction.php
│   │       │   ├── Forwarding
│   │       │   │   └── Request.php
│   │       │   ├── HttpClient
│   │       │   │   ├── ClientInterface.php
│   │       │   │   ├── CurlClient.php
│   │       │   │   └── StreamingClientInterface.php
│   │       │   ├── Identity
│   │       │   │   ├── VerificationReport.php
│   │       │   │   └── VerificationSession.php
│   │       │   ├── Issuing
│   │       │   │   ├── Authorization.php
│   │       │   │   ├── Card.php
│   │       │   │   ├── CardDetails.php
│   │       │   │   ├── Cardholder.php
│   │       │   │   ├── Dispute.php
│   │       │   │   ├── PersonalizationDesign.php
│   │       │   │   ├── PhysicalBundle.php
│   │       │   │   ├── Token.php
│   │       │   │   └── Transaction.php
│   │       │   ├── Radar
│   │       │   │   ├── EarlyFraudWarning.php
│   │       │   │   ├── ValueList.php
│   │       │   │   └── ValueListItem.php
│   │       │   ├── Reporting
│   │       │   │   ├── ReportRun.php
│   │       │   │   └── ReportType.php
│   │       │   ├── Service
│   │       │   │   ├── Apps
│   │       │   │   │   ├── AppsServiceFactory.php
│   │       │   │   │   └── SecretService.php
│   │       │   │   ├── Billing
│   │       │   │   │   ├── AlertService.php
│   │       │   │   │   ├── BillingServiceFactory.php
│   │       │   │   │   ├── CreditBalanceSummaryService.php
│   │       │   │   │   ├── CreditBalanceTransactionService.php
│   │       │   │   │   ├── CreditGrantService.php
│   │       │   │   │   ├── MeterEventAdjustmentService.php
│   │       │   │   │   ├── MeterEventService.php
│   │       │   │   │   └── MeterService.php
│   │       │   │   ├── BillingPortal
│   │       │   │   │   ├── BillingPortalServiceFactory.php
│   │       │   │   │   ├── ConfigurationService.php
│   │       │   │   │   └── SessionService.php
│   │       │   │   ├── Checkout
│   │       │   │   │   ├── CheckoutServiceFactory.php
│   │       │   │   │   └── SessionService.php
│   │       │   │   ├── Climate
│   │       │   │   │   ├── ClimateServiceFactory.php
│   │       │   │   │   ├── OrderService.php
│   │       │   │   │   ├── ProductService.php
│   │       │   │   │   └── SupplierService.php
│   │       │   │   ├── Entitlements
│   │       │   │   │   ├── ActiveEntitlementService.php
│   │       │   │   │   ├── EntitlementsServiceFactory.php
│   │       │   │   │   └── FeatureService.php
│   │       │   │   ├── FinancialConnections
│   │       │   │   │   ├── AccountService.php
│   │       │   │   │   ├── FinancialConnectionsServiceFactory.php
│   │       │   │   │   ├── SessionService.php
│   │       │   │   │   └── TransactionService.php
│   │       │   │   ├── Forwarding
│   │       │   │   │   ├── ForwardingServiceFactory.php
│   │       │   │   │   └── RequestService.php
│   │       │   │   ├── Identity
│   │       │   │   │   ├── IdentityServiceFactory.php
│   │       │   │   │   ├── VerificationReportService.php
│   │       │   │   │   └── VerificationSessionService.php
│   │       │   │   ├── Issuing
│   │       │   │   │   ├── AuthorizationService.php
│   │       │   │   │   ├── CardholderService.php
│   │       │   │   │   ├── CardService.php
│   │       │   │   │   ├── DisputeService.php
│   │       │   │   │   ├── IssuingServiceFactory.php
│   │       │   │   │   ├── PersonalizationDesignService.php
│   │       │   │   │   ├── PhysicalBundleService.php
│   │       │   │   │   ├── TokenService.php
│   │       │   │   │   └── TransactionService.php
│   │       │   │   ├── Radar
│   │       │   │   │   ├── EarlyFraudWarningService.php
│   │       │   │   │   ├── RadarServiceFactory.php
│   │       │   │   │   ├── ValueListItemService.php
│   │       │   │   │   └── ValueListService.php
│   │       │   │   ├── Reporting
│   │       │   │   │   ├── ReportingServiceFactory.php
│   │       │   │   │   ├── ReportRunService.php
│   │       │   │   │   └── ReportTypeService.php
│   │       │   │   ├── Sigma
│   │       │   │   │   ├── ScheduledQueryRunService.php
│   │       │   │   │   └── SigmaServiceFactory.php
│   │       │   │   ├── Tax
│   │       │   │   │   ├── CalculationService.php
│   │       │   │   │   ├── RegistrationService.php
│   │       │   │   │   ├── SettingsService.php
│   │       │   │   │   ├── TaxServiceFactory.php
│   │       │   │   │   └── TransactionService.php
│   │       │   │   ├── Terminal
│   │       │   │   │   ├── ConfigurationService.php
│   │       │   │   │   ├── ConnectionTokenService.php
│   │       │   │   │   ├── LocationService.php
│   │       │   │   │   ├── ReaderService.php
│   │       │   │   │   └── TerminalServiceFactory.php
│   │       │   │   ├── TestHelpers
│   │       │   │   │   ├── Issuing
│   │       │   │   │   │   ├── AuthorizationService.php
│   │       │   │   │   │   ├── CardService.php
│   │       │   │   │   │   ├── IssuingServiceFactory.php
│   │       │   │   │   │   ├── PersonalizationDesignService.php
│   │       │   │   │   │   └── TransactionService.php
│   │       │   │   │   ├── Terminal
│   │       │   │   │   │   ├── ReaderService.php
│   │       │   │   │   │   └── TerminalServiceFactory.php
│   │       │   │   │   ├── Treasury
│   │       │   │   │   │   ├── InboundTransferService.php
│   │       │   │   │   │   ├── OutboundPaymentService.php
│   │       │   │   │   │   ├── OutboundTransferService.php
│   │       │   │   │   │   ├── ReceivedCreditService.php
│   │       │   │   │   │   ├── ReceivedDebitService.php
│   │       │   │   │   │   └── TreasuryServiceFactory.php
│   │       │   │   │   ├── ConfirmationTokenService.php
│   │       │   │   │   ├── CustomerService.php
│   │       │   │   │   ├── RefundService.php
│   │       │   │   │   ├── TestClockService.php
│   │       │   │   │   └── TestHelpersServiceFactory.php
│   │       │   │   ├── Treasury
│   │       │   │   │   ├── CreditReversalService.php
│   │       │   │   │   ├── DebitReversalService.php
│   │       │   │   │   ├── FinancialAccountService.php
│   │       │   │   │   ├── InboundTransferService.php
│   │       │   │   │   ├── OutboundPaymentService.php
│   │       │   │   │   ├── OutboundTransferService.php
│   │       │   │   │   ├── ReceivedCreditService.php
│   │       │   │   │   ├── ReceivedDebitService.php
│   │       │   │   │   ├── TransactionEntryService.php
│   │       │   │   │   ├── TransactionService.php
│   │       │   │   │   └── TreasuryServiceFactory.php
│   │       │   │   ├── V2
│   │       │   │   │   ├── Billing
│   │       │   │   │   │   ├── BillingServiceFactory.php
│   │       │   │   │   │   ├── MeterEventAdjustmentService.php
│   │       │   │   │   │   ├── MeterEventService.php
│   │       │   │   │   │   ├── MeterEventSessionService.php
│   │       │   │   │   │   └── MeterEventStreamService.php
│   │       │   │   │   ├── Core
│   │       │   │   │   │   ├── CoreServiceFactory.php
│   │       │   │   │   │   ├── EventDestinationService.php
│   │       │   │   │   │   └── EventService.php
│   │       │   │   │   └── V2ServiceFactory.php
│   │       │   │   ├── AbstractService.php
│   │       │   │   ├── AbstractServiceFactory.php
│   │       │   │   ├── AccountLinkService.php
│   │       │   │   ├── AccountService.php
│   │       │   │   ├── AccountSessionService.php
│   │       │   │   ├── ApplePayDomainService.php
│   │       │   │   ├── ApplicationFeeService.php
│   │       │   │   ├── BalanceService.php
│   │       │   │   ├── BalanceTransactionService.php
│   │       │   │   ├── ChargeService.php
│   │       │   │   ├── ConfirmationTokenService.php
│   │       │   │   ├── CoreServiceFactory.php
│   │       │   │   ├── CountrySpecService.php
│   │       │   │   ├── CouponService.php
│   │       │   │   ├── CreditNoteService.php
│   │       │   │   ├── CustomerService.php
│   │       │   │   ├── CustomerSessionService.php
│   │       │   │   ├── DisputeService.php
│   │       │   │   ├── EphemeralKeyService.php
│   │       │   │   ├── EventService.php
│   │       │   │   ├── ExchangeRateService.php
│   │       │   │   ├── FileLinkService.php
│   │       │   │   ├── FileService.php
│   │       │   │   ├── InvoiceItemService.php
│   │       │   │   ├── InvoicePaymentService.php
│   │       │   │   ├── InvoiceRenderingTemplateService.php
│   │       │   │   ├── InvoiceService.php
│   │       │   │   ├── MandateService.php
│   │       │   │   ├── OAuthService.php
│   │       │   │   ├── PaymentIntentService.php
│   │       │   │   ├── PaymentLinkService.php
│   │       │   │   ├── PaymentMethodConfigurationService.php
│   │       │   │   ├── PaymentMethodDomainService.php
│   │       │   │   ├── PaymentMethodService.php
│   │       │   │   ├── PayoutService.php
│   │       │   │   ├── PlanService.php
│   │       │   │   ├── PriceService.php
│   │       │   │   ├── ProductService.php
│   │       │   │   ├── PromotionCodeService.php
│   │       │   │   ├── QuoteService.php
│   │       │   │   ├── RefundService.php
│   │       │   │   ├── ReviewService.php
│   │       │   │   ├── ServiceNavigatorTrait.php
│   │       │   │   ├── SetupAttemptService.php
│   │       │   │   ├── SetupIntentService.php
│   │       │   │   ├── ShippingRateService.php
│   │       │   │   ├── SourceService.php
│   │       │   │   ├── SubscriptionItemService.php
│   │       │   │   ├── SubscriptionScheduleService.php
│   │       │   │   ├── SubscriptionService.php
│   │       │   │   ├── TaxCodeService.php
│   │       │   │   ├── TaxIdService.php
│   │       │   │   ├── TaxRateService.php
│   │       │   │   ├── TokenService.php
│   │       │   │   ├── TopupService.php
│   │       │   │   ├── TransferService.php
│   │       │   │   └── WebhookEndpointService.php
│   │       │   ├── Sigma
│   │       │   │   └── ScheduledQueryRun.php
│   │       │   ├── Tax
│   │       │   │   ├── Calculation.php
│   │       │   │   ├── CalculationLineItem.php
│   │       │   │   ├── Registration.php
│   │       │   │   ├── Settings.php
│   │       │   │   ├── Transaction.php
│   │       │   │   └── TransactionLineItem.php
│   │       │   ├── Terminal
│   │       │   │   ├── Configuration.php
│   │       │   │   ├── ConnectionToken.php
│   │       │   │   ├── Location.php
│   │       │   │   └── Reader.php
│   │       │   ├── TestHelpers
│   │       │   │   └── TestClock.php
│   │       │   ├── Treasury
│   │       │   │   ├── CreditReversal.php
│   │       │   │   ├── DebitReversal.php
│   │       │   │   ├── FinancialAccount.php
│   │       │   │   ├── FinancialAccountFeatures.php
│   │       │   │   ├── InboundTransfer.php
│   │       │   │   ├── OutboundPayment.php
│   │       │   │   ├── OutboundTransfer.php
│   │       │   │   ├── ReceivedCredit.php
│   │       │   │   ├── ReceivedDebit.php
│   │       │   │   ├── Transaction.php
│   │       │   │   └── TransactionEntry.php
│   │       │   ├── Util
│   │       │   │   ├── ApiVersion.php
│   │       │   │   ├── CaseInsensitiveArray.php
│   │       │   │   ├── DefaultLogger.php
│   │       │   │   ├── EventTypes.php
│   │       │   │   ├── LoggerInterface.php
│   │       │   │   ├── ObjectTypes.php
│   │       │   │   ├── RandomGenerator.php
│   │       │   │   ├── RequestOptions.php
│   │       │   │   ├── Set.php
│   │       │   │   └── Util.php
│   │       │   ├── V2
│   │       │   │   ├── Billing
│   │       │   │   │   ├── MeterEvent.php
│   │       │   │   │   ├── MeterEventAdjustment.php
│   │       │   │   │   └── MeterEventSession.php
│   │       │   │   ├── Collection.php
│   │       │   │   ├── Event.php
│   │       │   │   └── EventDestination.php
│   │       │   ├── Account.php
│   │       │   ├── AccountLink.php
│   │       │   ├── AccountSession.php
│   │       │   ├── ApiRequestor.php
│   │       │   ├── ApiResource.php
│   │       │   ├── ApiResponse.php
│   │       │   ├── ApplePayDomain.php
│   │       │   ├── Application.php
│   │       │   ├── ApplicationFee.php
│   │       │   ├── ApplicationFeeRefund.php
│   │       │   ├── Balance.php
│   │       │   ├── BalanceTransaction.php
│   │       │   ├── BankAccount.php
│   │       │   ├── BaseStripeClient.php
│   │       │   ├── BaseStripeClientInterface.php
│   │       │   ├── Capability.php
│   │       │   ├── Card.php
│   │       │   ├── CashBalance.php
│   │       │   ├── Charge.php
│   │       │   ├── Collection.php
│   │       │   ├── ConfirmationToken.php
│   │       │   ├── ConnectCollectionTransfer.php
│   │       │   ├── CountrySpec.php
│   │       │   ├── Coupon.php
│   │       │   ├── CreditNote.php
│   │       │   ├── CreditNoteLineItem.php
│   │       │   ├── Customer.php
│   │       │   ├── CustomerBalanceTransaction.php
│   │       │   ├── CustomerCashBalanceTransaction.php
│   │       │   ├── CustomerSession.php
│   │       │   ├── Discount.php
│   │       │   ├── Dispute.php
│   │       │   ├── EphemeralKey.php
│   │       │   ├── ErrorObject.php
│   │       │   ├── Event.php
│   │       │   ├── ExchangeRate.php
│   │       │   ├── File.php
│   │       │   ├── FileLink.php
│   │       │   ├── FundingInstructions.php
│   │       │   ├── Invoice.php
│   │       │   ├── InvoiceItem.php
│   │       │   ├── InvoiceLineItem.php
│   │       │   ├── InvoicePayment.php
│   │       │   ├── InvoiceRenderingTemplate.php
│   │       │   ├── LineItem.php
│   │       │   ├── LoginLink.php
│   │       │   ├── Mandate.php
│   │       │   ├── OAuth.php
│   │       │   ├── OAuthErrorObject.php
│   │       │   ├── PaymentIntent.php
│   │       │   ├── PaymentLink.php
│   │       │   ├── PaymentMethod.php
│   │       │   ├── PaymentMethodConfiguration.php
│   │       │   ├── PaymentMethodDomain.php
│   │       │   ├── Payout.php
│   │       │   ├── Person.php
│   │       │   ├── Plan.php
│   │       │   ├── Price.php
│   │       │   ├── Product.php
│   │       │   ├── ProductFeature.php
│   │       │   ├── PromotionCode.php
│   │       │   ├── Quote.php
│   │       │   ├── Reason.php
│   │       │   ├── RecipientTransfer.php
│   │       │   ├── Refund.php
│   │       │   ├── RelatedObject.php
│   │       │   ├── RequestTelemetry.php
│   │       │   ├── ReserveTransaction.php
│   │       │   ├── Review.php
│   │       │   ├── SearchResult.php
│   │       │   ├── SetupAttempt.php
│   │       │   ├── SetupIntent.php
│   │       │   ├── ShippingRate.php
│   │       │   ├── SingletonApiResource.php
│   │       │   ├── Source.php
│   │       │   ├── SourceMandateNotification.php
│   │       │   ├── SourceTransaction.php
│   │       │   ├── Stripe.php
│   │       │   ├── StripeClient.php
│   │       │   ├── StripeClientInterface.php
│   │       │   ├── StripeObject.php
│   │       │   ├── StripeStreamingClientInterface.php
│   │       │   ├── Subscription.php
│   │       │   ├── SubscriptionItem.php
│   │       │   ├── SubscriptionSchedule.php
│   │       │   ├── TaxCode.php
│   │       │   ├── TaxDeductedAtSource.php
│   │       │   ├── TaxId.php
│   │       │   ├── TaxRate.php
│   │       │   ├── ThinEvent.php
│   │       │   ├── Token.php
│   │       │   ├── Topup.php
│   │       │   ├── Transfer.php
│   │       │   ├── TransferReversal.php
│   │       │   ├── Webhook.php
│   │       │   ├── WebhookEndpoint.php
│   │       │   └── WebhookSignature.php
│   │       ├── .gitignore
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── init.php
│   │       ├── justfile
│   │       ├── LICENSE
│   │       ├── OPENAPI_VERSION
│   │       ├── README.md
│   │       └── VERSION
│   ├── symfony
│   │   ├── clock
│   │   │   ├── Resources
│   │   │   │   └── now.php
│   │   │   ├── Test
│   │   │   │   └── ClockSensitiveTrait.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Clock.php
│   │   │   ├── ClockAwareTrait.php
│   │   │   ├── ClockInterface.php
│   │   │   ├── composer.json
│   │   │   ├── DatePoint.php
│   │   │   ├── LICENSE
│   │   │   ├── MockClock.php
│   │   │   ├── MonotonicClock.php
│   │   │   ├── NativeClock.php
│   │   │   └── README.md
│   │   ├── console
│   │   │   ├── Attribute
│   │   │   │   └── AsCommand.php
│   │   │   ├── CI
│   │   │   │   └── GithubActionReporter.php
│   │   │   ├── Command
│   │   │   │   ├── Command.php
│   │   │   │   ├── CompleteCommand.php
│   │   │   │   ├── DumpCompletionCommand.php
│   │   │   │   ├── HelpCommand.php
│   │   │   │   ├── LazyCommand.php
│   │   │   │   ├── ListCommand.php
│   │   │   │   ├── LockableTrait.php
│   │   │   │   ├── SignalableCommandInterface.php
│   │   │   │   └── TraceableCommand.php
│   │   │   ├── CommandLoader
│   │   │   │   ├── CommandLoaderInterface.php
│   │   │   │   ├── ContainerCommandLoader.php
│   │   │   │   └── FactoryCommandLoader.php
│   │   │   ├── Completion
│   │   │   │   ├── Output
│   │   │   │   │   ├── BashCompletionOutput.php
│   │   │   │   │   ├── CompletionOutputInterface.php
│   │   │   │   │   ├── FishCompletionOutput.php
│   │   │   │   │   └── ZshCompletionOutput.php
│   │   │   │   ├── CompletionInput.php
│   │   │   │   ├── CompletionSuggestions.php
│   │   │   │   └── Suggestion.php
│   │   │   ├── DataCollector
│   │   │   │   └── CommandDataCollector.php
│   │   │   ├── Debug
│   │   │   │   └── CliRequest.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddConsoleCommandPass.php
│   │   │   ├── Descriptor
│   │   │   │   ├── ApplicationDescription.php
│   │   │   │   ├── Descriptor.php
│   │   │   │   ├── DescriptorInterface.php
│   │   │   │   ├── JsonDescriptor.php
│   │   │   │   ├── MarkdownDescriptor.php
│   │   │   │   ├── ReStructuredTextDescriptor.php
│   │   │   │   ├── TextDescriptor.php
│   │   │   │   └── XmlDescriptor.php
│   │   │   ├── Event
│   │   │   │   ├── ConsoleAlarmEvent.php
│   │   │   │   ├── ConsoleCommandEvent.php
│   │   │   │   ├── ConsoleErrorEvent.php
│   │   │   │   ├── ConsoleEvent.php
│   │   │   │   ├── ConsoleSignalEvent.php
│   │   │   │   └── ConsoleTerminateEvent.php
│   │   │   ├── EventListener
│   │   │   │   └── ErrorListener.php
│   │   │   ├── Exception
│   │   │   │   ├── CommandNotFoundException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidOptionException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MissingInputException.php
│   │   │   │   ├── NamespaceNotFoundException.php
│   │   │   │   ├── RunCommandFailedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Formatter
│   │   │   │   ├── NullOutputFormatter.php
│   │   │   │   ├── NullOutputFormatterStyle.php
│   │   │   │   ├── OutputFormatter.php
│   │   │   │   ├── OutputFormatterInterface.php
│   │   │   │   ├── OutputFormatterStyle.php
│   │   │   │   ├── OutputFormatterStyleInterface.php
│   │   │   │   ├── OutputFormatterStyleStack.php
│   │   │   │   └── WrappableOutputFormatterInterface.php
│   │   │   ├── Helper
│   │   │   │   ├── DebugFormatterHelper.php
│   │   │   │   ├── DescriptorHelper.php
│   │   │   │   ├── Dumper.php
│   │   │   │   ├── FormatterHelper.php
│   │   │   │   ├── Helper.php
│   │   │   │   ├── HelperInterface.php
│   │   │   │   ├── HelperSet.php
│   │   │   │   ├── InputAwareHelper.php
│   │   │   │   ├── OutputWrapper.php
│   │   │   │   ├── ProcessHelper.php
│   │   │   │   ├── ProgressBar.php
│   │   │   │   ├── ProgressIndicator.php
│   │   │   │   ├── QuestionHelper.php
│   │   │   │   ├── SymfonyQuestionHelper.php
│   │   │   │   ├── Table.php
│   │   │   │   ├── TableCell.php
│   │   │   │   ├── TableCellStyle.php
│   │   │   │   ├── TableRows.php
│   │   │   │   ├── TableSeparator.php
│   │   │   │   └── TableStyle.php
│   │   │   ├── Input
│   │   │   │   ├── ArgvInput.php
│   │   │   │   ├── ArrayInput.php
│   │   │   │   ├── Input.php
│   │   │   │   ├── InputArgument.php
│   │   │   │   ├── InputAwareInterface.php
│   │   │   │   ├── InputDefinition.php
│   │   │   │   ├── InputInterface.php
│   │   │   │   ├── InputOption.php
│   │   │   │   ├── StreamableInputInterface.php
│   │   │   │   └── StringInput.php
│   │   │   ├── Logger
│   │   │   │   └── ConsoleLogger.php
│   │   │   ├── Messenger
│   │   │   │   ├── RunCommandContext.php
│   │   │   │   ├── RunCommandMessage.php
│   │   │   │   └── RunCommandMessageHandler.php
│   │   │   ├── Output
│   │   │   │   ├── AnsiColorMode.php
│   │   │   │   ├── BufferedOutput.php
│   │   │   │   ├── ConsoleOutput.php
│   │   │   │   ├── ConsoleOutputInterface.php
│   │   │   │   ├── ConsoleSectionOutput.php
│   │   │   │   ├── NullOutput.php
│   │   │   │   ├── Output.php
│   │   │   │   ├── OutputInterface.php
│   │   │   │   ├── StreamOutput.php
│   │   │   │   └── TrimmedBufferOutput.php
│   │   │   ├── Question
│   │   │   │   ├── ChoiceQuestion.php
│   │   │   │   ├── ConfirmationQuestion.php
│   │   │   │   └── Question.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── hiddeninput.exe
│   │   │   │   ├── completion.bash
│   │   │   │   ├── completion.fish
│   │   │   │   └── completion.zsh
│   │   │   ├── SignalRegistry
│   │   │   │   ├── SignalMap.php
│   │   │   │   └── SignalRegistry.php
│   │   │   ├── Style
│   │   │   │   ├── OutputStyle.php
│   │   │   │   ├── StyleInterface.php
│   │   │   │   └── SymfonyStyle.php
│   │   │   ├── Tester
│   │   │   │   ├── Constraint
│   │   │   │   │   └── CommandIsSuccessful.php
│   │   │   │   ├── ApplicationTester.php
│   │   │   │   ├── CommandCompletionTester.php
│   │   │   │   ├── CommandTester.php
│   │   │   │   └── TesterTrait.php
│   │   │   ├── Application.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Color.php
│   │   │   ├── composer.json
│   │   │   ├── ConsoleEvents.php
│   │   │   ├── Cursor.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SingleCommandApplication.php
│   │   │   └── Terminal.php
│   │   ├── css-selector
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── ExpressionErrorException.php
│   │   │   │   ├── InternalErrorException.php
│   │   │   │   ├── ParseException.php
│   │   │   │   └── SyntaxErrorException.php
│   │   │   ├── Node
│   │   │   │   ├── AbstractNode.php
│   │   │   │   ├── AttributeNode.php
│   │   │   │   ├── ClassNode.php
│   │   │   │   ├── CombinedSelectorNode.php
│   │   │   │   ├── ElementNode.php
│   │   │   │   ├── FunctionNode.php
│   │   │   │   ├── HashNode.php
│   │   │   │   ├── MatchingNode.php
│   │   │   │   ├── NegationNode.php
│   │   │   │   ├── NodeInterface.php
│   │   │   │   ├── PseudoNode.php
│   │   │   │   ├── SelectorNode.php
│   │   │   │   ├── Specificity.php
│   │   │   │   └── SpecificityAdjustmentNode.php
│   │   │   ├── Parser
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CommentHandler.php
│   │   │   │   │   ├── HandlerInterface.php
│   │   │   │   │   ├── HashHandler.php
│   │   │   │   │   ├── IdentifierHandler.php
│   │   │   │   │   ├── NumberHandler.php
│   │   │   │   │   ├── StringHandler.php
│   │   │   │   │   └── WhitespaceHandler.php
│   │   │   │   ├── Shortcut
│   │   │   │   │   ├── ClassParser.php
│   │   │   │   │   ├── ElementParser.php
│   │   │   │   │   ├── EmptyStringParser.php
│   │   │   │   │   └── HashParser.php
│   │   │   │   ├── Tokenizer
│   │   │   │   │   ├── Tokenizer.php
│   │   │   │   │   ├── TokenizerEscaping.php
│   │   │   │   │   └── TokenizerPatterns.php
│   │   │   │   ├── Parser.php
│   │   │   │   ├── ParserInterface.php
│   │   │   │   ├── Reader.php
│   │   │   │   ├── Token.php
│   │   │   │   └── TokenStream.php
│   │   │   ├── XPath
│   │   │   │   ├── Extension
│   │   │   │   │   ├── AbstractExtension.php
│   │   │   │   │   ├── AttributeMatchingExtension.php
│   │   │   │   │   ├── CombinationExtension.php
│   │   │   │   │   ├── ExtensionInterface.php
│   │   │   │   │   ├── FunctionExtension.php
│   │   │   │   │   ├── HtmlExtension.php
│   │   │   │   │   ├── NodeExtension.php
│   │   │   │   │   └── PseudoClassExtension.php
│   │   │   │   ├── Translator.php
│   │   │   │   ├── TranslatorInterface.php
│   │   │   │   └── XPathExpr.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── CssSelectorConverter.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── deprecation-contracts
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── function.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── error-handler
│   │   │   ├── Error
│   │   │   │   ├── ClassNotFoundError.php
│   │   │   │   ├── FatalError.php
│   │   │   │   ├── OutOfMemoryError.php
│   │   │   │   ├── UndefinedFunctionError.php
│   │   │   │   └── UndefinedMethodError.php
│   │   │   ├── ErrorEnhancer
│   │   │   │   ├── ClassNotFoundErrorEnhancer.php
│   │   │   │   ├── ErrorEnhancerInterface.php
│   │   │   │   ├── UndefinedFunctionErrorEnhancer.php
│   │   │   │   └── UndefinedMethodErrorEnhancer.php
│   │   │   ├── ErrorRenderer
│   │   │   │   ├── CliErrorRenderer.php
│   │   │   │   ├── ErrorRendererInterface.php
│   │   │   │   ├── FileLinkFormatter.php
│   │   │   │   ├── HtmlErrorRenderer.php
│   │   │   │   └── SerializerErrorRenderer.php
│   │   │   ├── Exception
│   │   │   │   ├── FlattenException.php
│   │   │   │   └── SilencedErrorContext.php
│   │   │   ├── Internal
│   │   │   │   └── TentativeTypes.php
│   │   │   ├── Resources
│   │   │   │   ├── assets
│   │   │   │   │   ├── css
│   │   │   │   │   │   ├── error.css
│   │   │   │   │   │   ├── exception_full.css
│   │   │   │   │   │   └── exception.css
│   │   │   │   │   ├── images
│   │   │   │   │   │   ├── chevron-right.svg
│   │   │   │   │   │   ├── favicon.png.base64
│   │   │   │   │   │   ├── icon-book.svg
│   │   │   │   │   │   ├── icon-copy.svg
│   │   │   │   │   │   ├── icon-minus-square-o.svg
│   │   │   │   │   │   ├── icon-minus-square.svg
│   │   │   │   │   │   ├── icon-plus-square-o.svg
│   │   │   │   │   │   ├── icon-plus-square.svg
│   │   │   │   │   │   ├── icon-support.svg
│   │   │   │   │   │   ├── symfony-ghost.svg.php
│   │   │   │   │   │   └── symfony-logo.svg
│   │   │   │   │   └── js
│   │   │   │   │       └── exception.js
│   │   │   │   ├── bin
│   │   │   │   │   ├── extract-tentative-return-types.php
│   │   │   │   │   └── patch-type-declarations
│   │   │   │   └── views
│   │   │   │       ├── error.html.php
│   │   │   │       ├── exception_full.html.php
│   │   │   │       ├── exception.html.php
│   │   │   │       ├── logs.html.php
│   │   │   │       ├── trace.html.php
│   │   │   │       ├── traces_text.html.php
│   │   │   │       └── traces.html.php
│   │   │   ├── BufferingLogger.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Debug.php
│   │   │   ├── DebugClassLoader.php
│   │   │   ├── ErrorHandler.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── ThrowableUtils.php
│   │   ├── event-dispatcher
│   │   │   ├── Attribute
│   │   │   │   └── AsEventListener.php
│   │   │   ├── Debug
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── WrappedListener.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddEventAliasesPass.php
│   │   │   │   └── RegisterListenersPass.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── EventDispatcher.php
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── EventSubscriberInterface.php
│   │   │   ├── GenericEvent.php
│   │   │   ├── ImmutableEventDispatcher.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── event-dispatcher-contracts
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Event.php
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── finder
│   │   │   ├── Comparator
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── DateComparator.php
│   │   │   │   └── NumberComparator.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedException.php
│   │   │   │   └── DirectoryNotFoundException.php
│   │   │   ├── Iterator
│   │   │   │   ├── CustomFilterIterator.php
│   │   │   │   ├── DateRangeFilterIterator.php
│   │   │   │   ├── DepthRangeFilterIterator.php
│   │   │   │   ├── ExcludeDirectoryFilterIterator.php
│   │   │   │   ├── FilecontentFilterIterator.php
│   │   │   │   ├── FilenameFilterIterator.php
│   │   │   │   ├── FileTypeFilterIterator.php
│   │   │   │   ├── LazyIterator.php
│   │   │   │   ├── MultiplePcreFilterIterator.php
│   │   │   │   ├── PathFilterIterator.php
│   │   │   │   ├── RecursiveDirectoryIterator.php
│   │   │   │   ├── SizeRangeFilterIterator.php
│   │   │   │   ├── SortableIterator.php
│   │   │   │   └── VcsIgnoredFilterIterator.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Finder.php
│   │   │   ├── Gitignore.php
│   │   │   ├── Glob.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SplFileInfo.php
│   │   ├── http-foundation
│   │   │   ├── Exception
│   │   │   │   ├── BadRequestException.php
│   │   │   │   ├── ConflictingHeadersException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── JsonException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RequestExceptionInterface.php
│   │   │   │   ├── SessionNotFoundException.php
│   │   │   │   ├── SuspiciousOperationException.php
│   │   │   │   └── UnexpectedValueException.php
│   │   │   ├── File
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AccessDeniedException.php
│   │   │   │   │   ├── CannotWriteFileException.php
│   │   │   │   │   ├── ExtensionFileException.php
│   │   │   │   │   ├── FileException.php
│   │   │   │   │   ├── FileNotFoundException.php
│   │   │   │   │   ├── FormSizeFileException.php
│   │   │   │   │   ├── IniSizeFileException.php
│   │   │   │   │   ├── NoFileException.php
│   │   │   │   │   ├── NoTmpDirFileException.php
│   │   │   │   │   ├── PartialFileException.php
│   │   │   │   │   ├── UnexpectedTypeException.php
│   │   │   │   │   └── UploadException.php
│   │   │   │   ├── File.php
│   │   │   │   ├── Stream.php
│   │   │   │   └── UploadedFile.php
│   │   │   ├── RateLimiter
│   │   │   │   ├── AbstractRequestRateLimiter.php
│   │   │   │   ├── PeekableRequestRateLimiterInterface.php
│   │   │   │   └── RequestRateLimiterInterface.php
│   │   │   ├── RequestMatcher
│   │   │   │   ├── AttributesRequestMatcher.php
│   │   │   │   ├── ExpressionRequestMatcher.php
│   │   │   │   ├── HeaderRequestMatcher.php
│   │   │   │   ├── HostRequestMatcher.php
│   │   │   │   ├── IpsRequestMatcher.php
│   │   │   │   ├── IsJsonRequestMatcher.php
│   │   │   │   ├── MethodRequestMatcher.php
│   │   │   │   ├── PathRequestMatcher.php
│   │   │   │   ├── PortRequestMatcher.php
│   │   │   │   ├── QueryParameterRequestMatcher.php
│   │   │   │   └── SchemeRequestMatcher.php
│   │   │   ├── Session
│   │   │   │   ├── Attribute
│   │   │   │   │   ├── AttributeBag.php
│   │   │   │   │   └── AttributeBagInterface.php
│   │   │   │   ├── Flash
│   │   │   │   │   ├── AutoExpireFlashBag.php
│   │   │   │   │   ├── FlashBag.php
│   │   │   │   │   └── FlashBagInterface.php
│   │   │   │   ├── Storage
│   │   │   │   │   ├── Handler
│   │   │   │   │   │   ├── AbstractSessionHandler.php
│   │   │   │   │   │   ├── IdentityMarshaller.php
│   │   │   │   │   │   ├── MarshallingSessionHandler.php
│   │   │   │   │   │   ├── MemcachedSessionHandler.php
│   │   │   │   │   │   ├── MigratingSessionHandler.php
│   │   │   │   │   │   ├── MongoDbSessionHandler.php
│   │   │   │   │   │   ├── NativeFileSessionHandler.php
│   │   │   │   │   │   ├── NullSessionHandler.php
│   │   │   │   │   │   ├── PdoSessionHandler.php
│   │   │   │   │   │   ├── RedisSessionHandler.php
│   │   │   │   │   │   ├── SessionHandlerFactory.php
│   │   │   │   │   │   └── StrictSessionHandler.php
│   │   │   │   │   ├── Proxy
│   │   │   │   │   │   ├── AbstractProxy.php
│   │   │   │   │   │   └── SessionHandlerProxy.php
│   │   │   │   │   ├── MetadataBag.php
│   │   │   │   │   ├── MockArraySessionStorage.php
│   │   │   │   │   ├── MockFileSessionStorage.php
│   │   │   │   │   ├── MockFileSessionStorageFactory.php
│   │   │   │   │   ├── NativeSessionStorage.php
│   │   │   │   │   ├── NativeSessionStorageFactory.php
│   │   │   │   │   ├── PhpBridgeSessionStorage.php
│   │   │   │   │   ├── PhpBridgeSessionStorageFactory.php
│   │   │   │   │   ├── SessionStorageFactoryInterface.php
│   │   │   │   │   └── SessionStorageInterface.php
│   │   │   │   ├── FlashBagAwareSessionInterface.php
│   │   │   │   ├── Session.php
│   │   │   │   ├── SessionBagInterface.php
│   │   │   │   ├── SessionBagProxy.php
│   │   │   │   ├── SessionFactory.php
│   │   │   │   ├── SessionFactoryInterface.php
│   │   │   │   ├── SessionInterface.php
│   │   │   │   └── SessionUtils.php
│   │   │   ├── Test
│   │   │   │   └── Constraint
│   │   │   │       ├── RequestAttributeValueSame.php
│   │   │   │       ├── ResponseCookieValueSame.php
│   │   │   │       ├── ResponseFormatSame.php
│   │   │   │       ├── ResponseHasCookie.php
│   │   │   │       ├── ResponseHasHeader.php
│   │   │   │       ├── ResponseHeaderLocationSame.php
│   │   │   │       ├── ResponseHeaderSame.php
│   │   │   │       ├── ResponseIsRedirected.php
│   │   │   │       ├── ResponseIsSuccessful.php
│   │   │   │       ├── ResponseIsUnprocessable.php
│   │   │   │       └── ResponseStatusCodeSame.php
│   │   │   ├── AcceptHeader.php
│   │   │   ├── AcceptHeaderItem.php
│   │   │   ├── BinaryFileResponse.php
│   │   │   ├── ChainRequestMatcher.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Cookie.php
│   │   │   ├── FileBag.php
│   │   │   ├── HeaderBag.php
│   │   │   ├── HeaderUtils.php
│   │   │   ├── InputBag.php
│   │   │   ├── IpUtils.php
│   │   │   ├── JsonResponse.php
│   │   │   ├── LICENSE
│   │   │   ├── ParameterBag.php
│   │   │   ├── README.md
│   │   │   ├── RedirectResponse.php
│   │   │   ├── Request.php
│   │   │   ├── RequestMatcherInterface.php
│   │   │   ├── RequestStack.php
│   │   │   ├── Response.php
│   │   │   ├── ResponseHeaderBag.php
│   │   │   ├── ServerBag.php
│   │   │   ├── StreamedJsonResponse.php
│   │   │   ├── StreamedResponse.php
│   │   │   ├── UriSigner.php
│   │   │   └── UrlHelper.php
│   │   ├── http-kernel
│   │   │   ├── Attribute
│   │   │   │   ├── AsController.php
│   │   │   │   ├── AsTargetedValueResolver.php
│   │   │   │   ├── Cache.php
│   │   │   │   ├── MapDateTime.php
│   │   │   │   ├── MapQueryParameter.php
│   │   │   │   ├── MapQueryString.php
│   │   │   │   ├── MapRequestPayload.php
│   │   │   │   ├── MapUploadedFile.php
│   │   │   │   ├── ValueResolver.php
│   │   │   │   ├── WithHttpStatus.php
│   │   │   │   └── WithLogLevel.php
│   │   │   ├── Bundle
│   │   │   │   ├── AbstractBundle.php
│   │   │   │   ├── Bundle.php
│   │   │   │   ├── BundleExtension.php
│   │   │   │   └── BundleInterface.php
│   │   │   ├── CacheClearer
│   │   │   │   ├── CacheClearerInterface.php
│   │   │   │   ├── ChainCacheClearer.php
│   │   │   │   └── Psr6CacheClearer.php
│   │   │   ├── CacheWarmer
│   │   │   │   ├── CacheWarmer.php
│   │   │   │   ├── CacheWarmerAggregate.php
│   │   │   │   ├── CacheWarmerInterface.php
│   │   │   │   └── WarmableInterface.php
│   │   │   ├── Config
│   │   │   │   └── FileLocator.php
│   │   │   ├── Controller
│   │   │   │   ├── ArgumentResolver
│   │   │   │   │   ├── BackedEnumValueResolver.php
│   │   │   │   │   ├── DateTimeValueResolver.php
│   │   │   │   │   ├── DefaultValueResolver.php
│   │   │   │   │   ├── NotTaggedControllerValueResolver.php
│   │   │   │   │   ├── QueryParameterValueResolver.php
│   │   │   │   │   ├── RequestAttributeValueResolver.php
│   │   │   │   │   ├── RequestPayloadValueResolver.php
│   │   │   │   │   ├── RequestValueResolver.php
│   │   │   │   │   ├── ServiceValueResolver.php
│   │   │   │   │   ├── SessionValueResolver.php
│   │   │   │   │   ├── TraceableValueResolver.php
│   │   │   │   │   ├── UidValueResolver.php
│   │   │   │   │   └── VariadicValueResolver.php
│   │   │   │   ├── ArgumentResolver.php
│   │   │   │   ├── ArgumentResolverInterface.php
│   │   │   │   ├── ContainerControllerResolver.php
│   │   │   │   ├── ControllerReference.php
│   │   │   │   ├── ControllerResolver.php
│   │   │   │   ├── ControllerResolverInterface.php
│   │   │   │   ├── ErrorController.php
│   │   │   │   ├── TraceableArgumentResolver.php
│   │   │   │   ├── TraceableControllerResolver.php
│   │   │   │   └── ValueResolverInterface.php
│   │   │   ├── ControllerMetadata
│   │   │   │   ├── ArgumentMetadata.php
│   │   │   │   ├── ArgumentMetadataFactory.php
│   │   │   │   └── ArgumentMetadataFactoryInterface.php
│   │   │   ├── DataCollector
│   │   │   │   ├── AjaxDataCollector.php
│   │   │   │   ├── ConfigDataCollector.php
│   │   │   │   ├── DataCollector.php
│   │   │   │   ├── DataCollectorInterface.php
│   │   │   │   ├── DumpDataCollector.php
│   │   │   │   ├── EventDataCollector.php
│   │   │   │   ├── ExceptionDataCollector.php
│   │   │   │   ├── LateDataCollectorInterface.php
│   │   │   │   ├── LoggerDataCollector.php
│   │   │   │   ├── MemoryDataCollector.php
│   │   │   │   ├── RequestDataCollector.php
│   │   │   │   ├── RouterDataCollector.php
│   │   │   │   └── TimeDataCollector.php
│   │   │   ├── Debug
│   │   │   │   ├── ErrorHandlerConfigurator.php
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── VirtualRequestStack.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddAnnotatedClassesToCachePass.php
│   │   │   │   ├── ConfigurableExtension.php
│   │   │   │   ├── ControllerArgumentValueResolverPass.php
│   │   │   │   ├── Extension.php
│   │   │   │   ├── FragmentRendererPass.php
│   │   │   │   ├── LazyLoadingFragmentHandler.php
│   │   │   │   ├── LoggerPass.php
│   │   │   │   ├── MergeExtensionConfigurationPass.php
│   │   │   │   ├── RegisterControllerArgumentLocatorsPass.php
│   │   │   │   ├── RegisterLocaleAwareServicesPass.php
│   │   │   │   ├── RemoveEmptyControllerArgumentLocatorsPass.php
│   │   │   │   ├── ResettableServicePass.php
│   │   │   │   └── ServicesResetter.php
│   │   │   ├── Event
│   │   │   │   ├── ControllerArgumentsEvent.php
│   │   │   │   ├── ControllerEvent.php
│   │   │   │   ├── ExceptionEvent.php
│   │   │   │   ├── FinishRequestEvent.php
│   │   │   │   ├── KernelEvent.php
│   │   │   │   ├── RequestEvent.php
│   │   │   │   ├── ResponseEvent.php
│   │   │   │   ├── TerminateEvent.php
│   │   │   │   └── ViewEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── AbstractSessionListener.php
│   │   │   │   ├── AddRequestFormatsListener.php
│   │   │   │   ├── CacheAttributeListener.php
│   │   │   │   ├── DebugHandlersListener.php
│   │   │   │   ├── DisallowRobotsIndexingListener.php
│   │   │   │   ├── DumpListener.php
│   │   │   │   ├── ErrorListener.php
│   │   │   │   ├── FragmentListener.php
│   │   │   │   ├── LocaleAwareListener.php
│   │   │   │   ├── LocaleListener.php
│   │   │   │   ├── ProfilerListener.php
│   │   │   │   ├── ResponseListener.php
│   │   │   │   ├── RouterListener.php
│   │   │   │   ├── SessionListener.php
│   │   │   │   ├── SurrogateListener.php
│   │   │   │   └── ValidateRequestListener.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedHttpException.php
│   │   │   │   ├── BadRequestHttpException.php
│   │   │   │   ├── ConflictHttpException.php
│   │   │   │   ├── ControllerDoesNotReturnResponseException.php
│   │   │   │   ├── GoneHttpException.php
│   │   │   │   ├── HttpException.php
│   │   │   │   ├── HttpExceptionInterface.php
│   │   │   │   ├── InvalidMetadataException.php
│   │   │   │   ├── LengthRequiredHttpException.php
│   │   │   │   ├── LockedHttpException.php
│   │   │   │   ├── MethodNotAllowedHttpException.php
│   │   │   │   ├── NearMissValueResolverException.php
│   │   │   │   ├── NotAcceptableHttpException.php
│   │   │   │   ├── NotFoundHttpException.php
│   │   │   │   ├── PreconditionFailedHttpException.php
│   │   │   │   ├── PreconditionRequiredHttpException.php
│   │   │   │   ├── ResolverNotFoundException.php
│   │   │   │   ├── ServiceUnavailableHttpException.php
│   │   │   │   ├── TooManyRequestsHttpException.php
│   │   │   │   ├── UnauthorizedHttpException.php
│   │   │   │   ├── UnexpectedSessionUsageException.php
│   │   │   │   ├── UnprocessableEntityHttpException.php
│   │   │   │   └── UnsupportedMediaTypeHttpException.php
│   │   │   ├── Fragment
│   │   │   │   ├── AbstractSurrogateFragmentRenderer.php
│   │   │   │   ├── EsiFragmentRenderer.php
│   │   │   │   ├── FragmentHandler.php
│   │   │   │   ├── FragmentRendererInterface.php
│   │   │   │   ├── FragmentUriGenerator.php
│   │   │   │   ├── FragmentUriGeneratorInterface.php
│   │   │   │   ├── HIncludeFragmentRenderer.php
│   │   │   │   ├── InlineFragmentRenderer.php
│   │   │   │   ├── RoutableFragmentRenderer.php
│   │   │   │   └── SsiFragmentRenderer.php
│   │   │   ├── HttpCache
│   │   │   │   ├── AbstractSurrogate.php
│   │   │   │   ├── Esi.php
│   │   │   │   ├── HttpCache.php
│   │   │   │   ├── ResponseCacheStrategy.php
│   │   │   │   ├── ResponseCacheStrategyInterface.php
│   │   │   │   ├── Ssi.php
│   │   │   │   ├── Store.php
│   │   │   │   ├── StoreInterface.php
│   │   │   │   ├── SubRequestHandler.php
│   │   │   │   └── SurrogateInterface.php
│   │   │   ├── Log
│   │   │   │   ├── DebugLoggerConfigurator.php
│   │   │   │   ├── DebugLoggerInterface.php
│   │   │   │   └── Logger.php
│   │   │   ├── Profiler
│   │   │   │   ├── FileProfilerStorage.php
│   │   │   │   ├── Profile.php
│   │   │   │   ├── Profiler.php
│   │   │   │   └── ProfilerStorageInterface.php
│   │   │   ├── Resources
│   │   │   │   └── welcome.html.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── HttpClientKernel.php
│   │   │   ├── HttpKernel.php
│   │   │   ├── HttpKernelBrowser.php
│   │   │   ├── HttpKernelInterface.php
│   │   │   ├── Kernel.php
│   │   │   ├── KernelEvents.php
│   │   │   ├── KernelInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── RebootableInterface.php
│   │   │   └── TerminableInterface.php
│   │   ├── mailer
│   │   │   ├── Command
│   │   │   │   └── MailerTestCommand.php
│   │   │   ├── DataCollector
│   │   │   │   └── MessageDataCollector.php
│   │   │   ├── Event
│   │   │   │   ├── FailedMessageEvent.php
│   │   │   │   ├── MessageEvent.php
│   │   │   │   ├── MessageEvents.php
│   │   │   │   └── SentMessageEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── EnvelopeListener.php
│   │   │   │   ├── MessageListener.php
│   │   │   │   ├── MessageLoggerListener.php
│   │   │   │   └── MessengerTransportListener.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── HttpTransportException.php
│   │   │   │   ├── IncompleteDsnException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── TransportException.php
│   │   │   │   ├── TransportExceptionInterface.php
│   │   │   │   ├── UnexpectedResponseException.php
│   │   │   │   └── UnsupportedSchemeException.php
│   │   │   ├── Header
│   │   │   │   ├── MetadataHeader.php
│   │   │   │   └── TagHeader.php
│   │   │   ├── Messenger
│   │   │   │   ├── MessageHandler.php
│   │   │   │   └── SendEmailMessage.php
│   │   │   ├── Test
│   │   │   │   ├── Constraint
│   │   │   │   │   ├── EmailCount.php
│   │   │   │   │   └── EmailIsQueued.php
│   │   │   │   ├── AbstractTransportFactoryTestCase.php
│   │   │   │   ├── IncompleteDsnTestTrait.php
│   │   │   │   └── TransportFactoryTestCase.php
│   │   │   ├── Transport
│   │   │   │   ├── Smtp
│   │   │   │   │   ├── Auth
│   │   │   │   │   │   ├── AuthenticatorInterface.php
│   │   │   │   │   │   ├── CramMd5Authenticator.php
│   │   │   │   │   │   ├── LoginAuthenticator.php
│   │   │   │   │   │   ├── PlainAuthenticator.php
│   │   │   │   │   │   └── XOAuth2Authenticator.php
│   │   │   │   │   ├── Stream
│   │   │   │   │   │   ├── AbstractStream.php
│   │   │   │   │   │   ├── ProcessStream.php
│   │   │   │   │   │   └── SocketStream.php
│   │   │   │   │   ├── EsmtpTransport.php
│   │   │   │   │   ├── EsmtpTransportFactory.php
│   │   │   │   │   └── SmtpTransport.php
│   │   │   │   ├── AbstractApiTransport.php
│   │   │   │   ├── AbstractHttpTransport.php
│   │   │   │   ├── AbstractTransport.php
│   │   │   │   ├── AbstractTransportFactory.php
│   │   │   │   ├── Dsn.php
│   │   │   │   ├── FailoverTransport.php
│   │   │   │   ├── NativeTransportFactory.php
│   │   │   │   ├── NullTransport.php
│   │   │   │   ├── NullTransportFactory.php
│   │   │   │   ├── RoundRobinTransport.php
│   │   │   │   ├── SendmailTransport.php
│   │   │   │   ├── SendmailTransportFactory.php
│   │   │   │   ├── TransportFactoryInterface.php
│   │   │   │   ├── TransportInterface.php
│   │   │   │   └── Transports.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── DelayedEnvelope.php
│   │   │   ├── Envelope.php
│   │   │   ├── LICENSE
│   │   │   ├── Mailer.php
│   │   │   ├── MailerInterface.php
│   │   │   ├── README.md
│   │   │   ├── SentMessage.php
│   │   │   └── Transport.php
│   │   ├── mime
│   │   │   ├── Crypto
│   │   │   │   ├── DkimOptions.php
│   │   │   │   ├── DkimSigner.php
│   │   │   │   ├── SMime.php
│   │   │   │   ├── SMimeEncrypter.php
│   │   │   │   └── SMimeSigner.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddMimeTypeGuesserPass.php
│   │   │   ├── Encoder
│   │   │   │   ├── AddressEncoderInterface.php
│   │   │   │   ├── Base64ContentEncoder.php
│   │   │   │   ├── Base64Encoder.php
│   │   │   │   ├── Base64MimeHeaderEncoder.php
│   │   │   │   ├── ContentEncoderInterface.php
│   │   │   │   ├── EightBitContentEncoder.php
│   │   │   │   ├── EncoderInterface.php
│   │   │   │   ├── IdnAddressEncoder.php
│   │   │   │   ├── MimeHeaderEncoderInterface.php
│   │   │   │   ├── QpContentEncoder.php
│   │   │   │   ├── QpEncoder.php
│   │   │   │   ├── QpMimeHeaderEncoder.php
│   │   │   │   └── Rfc2231Encoder.php
│   │   │   ├── Exception
│   │   │   │   ├── AddressEncoderException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RfcComplianceException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Header
│   │   │   │   ├── AbstractHeader.php
│   │   │   │   ├── DateHeader.php
│   │   │   │   ├── HeaderInterface.php
│   │   │   │   ├── Headers.php
│   │   │   │   ├── IdentificationHeader.php
│   │   │   │   ├── MailboxHeader.php
│   │   │   │   ├── MailboxListHeader.php
│   │   │   │   ├── ParameterizedHeader.php
│   │   │   │   ├── PathHeader.php
│   │   │   │   └── UnstructuredHeader.php
│   │   │   ├── HtmlToTextConverter
│   │   │   │   ├── DefaultHtmlToTextConverter.php
│   │   │   │   ├── HtmlToTextConverterInterface.php
│   │   │   │   └── LeagueHtmlToMarkdownConverter.php
│   │   │   ├── Part
│   │   │   │   ├── Multipart
│   │   │   │   │   ├── AlternativePart.php
│   │   │   │   │   ├── DigestPart.php
│   │   │   │   │   ├── FormDataPart.php
│   │   │   │   │   ├── MixedPart.php
│   │   │   │   │   └── RelatedPart.php
│   │   │   │   ├── AbstractMultipartPart.php
│   │   │   │   ├── AbstractPart.php
│   │   │   │   ├── DataPart.php
│   │   │   │   ├── File.php
│   │   │   │   ├── MessagePart.php
│   │   │   │   ├── SMimePart.php
│   │   │   │   └── TextPart.php
│   │   │   ├── Resources
│   │   │   │   └── bin
│   │   │   ├── Test
│   │   │   │   └── Constraint
│   │   │   │       ├── EmailAddressContains.php
│   │   │   │       ├── EmailAttachmentCount.php
│   │   │   │       ├── EmailHasHeader.php
│   │   │   │       ├── EmailHeaderSame.php
│   │   │   │       ├── EmailHtmlBodyContains.php
│   │   │   │       ├── EmailSubjectContains.php
│   │   │   │       └── EmailTextBodyContains.php
│   │   │   ├── Address.php
│   │   │   ├── BodyRendererInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CharacterStream.php
│   │   │   ├── composer.json
│   │   │   ├── DraftEmail.php
│   │   │   ├── Email.php
│   │   │   ├── FileBinaryMimeTypeGuesser.php
│   │   │   ├── FileinfoMimeTypeGuesser.php
│   │   │   ├── LICENSE
│   │   │   ├── Message.php
│   │   │   ├── MessageConverter.php
│   │   │   ├── MimeTypeGuesserInterface.php
│   │   │   ├── MimeTypes.php
│   │   │   ├── MimeTypesInterface.php
│   │   │   ├── RawMessage.php
│   │   │   └── README.md
│   │   ├── polyfill-ctype
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── Ctype.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-grapheme
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── Grapheme.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-idn
│   │   │   ├── Resources
│   │   │   │   └── unidata
│   │   │   │       ├── deviation.php
│   │   │   │       ├── disallowed_STD3_mapped.php
│   │   │   │       ├── disallowed_STD3_valid.php
│   │   │   │       ├── disallowed.php
│   │   │   │       ├── DisallowedRanges.php
│   │   │   │       ├── ignored.php
│   │   │   │       ├── mapped.php
│   │   │   │       ├── Regex.php
│   │   │   │       └── virama.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── Idn.php
│   │   │   ├── Info.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-normalizer
│   │   │   ├── Resources
│   │   │   │   ├── stubs
│   │   │   │   │   └── Normalizer.php
│   │   │   │   └── unidata
│   │   │   │       ├── canonicalComposition.php
│   │   │   │       ├── canonicalDecomposition.php
│   │   │   │       ├── combiningClass.php
│   │   │   │       └── compatibilityDecomposition.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Normalizer.php
│   │   │   └── README.md
│   │   ├── polyfill-mbstring
│   │   │   ├── Resources
│   │   │   │   └── unidata
│   │   │   │       ├── caseFolding.php
│   │   │   │       ├── lowerCase.php
│   │   │   │       ├── titleCaseRegexp.php
│   │   │   │       └── upperCase.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Mbstring.php
│   │   │   └── README.md
│   │   ├── polyfill-php80
│   │   │   ├── Resources
│   │   │   │   └── stubs
│   │   │   │       ├── Attribute.php
│   │   │   │       ├── PhpToken.php
│   │   │   │       ├── Stringable.php
│   │   │   │       ├── UnhandledMatchError.php
│   │   │   │       └── ValueError.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php80.php
│   │   │   ├── PhpToken.php
│   │   │   └── README.md
│   │   ├── polyfill-php83
│   │   │   ├── Resources
│   │   │   │   └── stubs
│   │   │   │       ├── DateError.php
│   │   │   │       ├── DateException.php
│   │   │   │       ├── DateInvalidOperationException.php
│   │   │   │       ├── DateInvalidTimeZoneException.php
│   │   │   │       ├── DateMalformedIntervalStringException.php
│   │   │   │       ├── DateMalformedPeriodStringException.php
│   │   │   │       ├── DateMalformedStringException.php
│   │   │   │       ├── DateObjectError.php
│   │   │   │       ├── DateRangeError.php
│   │   │   │       ├── Override.php
│   │   │   │       └── SQLite3Exception.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap81.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php83.php
│   │   │   └── README.md
│   │   ├── polyfill-uuid
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── Uuid.php
│   │   ├── process
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── ProcessFailedException.php
│   │   │   │   ├── ProcessSignaledException.php
│   │   │   │   ├── ProcessStartFailedException.php
│   │   │   │   ├── ProcessTimedOutException.php
│   │   │   │   ├── RunProcessFailedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Messenger
│   │   │   │   ├── RunProcessContext.php
│   │   │   │   ├── RunProcessMessage.php
│   │   │   │   └── RunProcessMessageHandler.php
│   │   │   ├── Pipes
│   │   │   │   ├── AbstractPipes.php
│   │   │   │   ├── PipesInterface.php
│   │   │   │   ├── UnixPipes.php
│   │   │   │   └── WindowsPipes.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── ExecutableFinder.php
│   │   │   ├── InputStream.php
│   │   │   ├── LICENSE
│   │   │   ├── PhpExecutableFinder.php
│   │   │   ├── PhpProcess.php
│   │   │   ├── PhpSubprocess.php
│   │   │   ├── Process.php
│   │   │   ├── ProcessUtils.php
│   │   │   └── README.md
│   │   ├── routing
│   │   │   ├── Annotation
│   │   │   │   └── Route.php
│   │   │   ├── Attribute
│   │   │   │   └── Route.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddExpressionLanguageProvidersPass.php
│   │   │   │   └── RoutingResolverPass.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidParameterException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MethodNotAllowedException.php
│   │   │   │   ├── MissingMandatoryParametersException.php
│   │   │   │   ├── NoConfigurationException.php
│   │   │   │   ├── ResourceNotFoundException.php
│   │   │   │   ├── RouteCircularReferenceException.php
│   │   │   │   ├── RouteNotFoundException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Generator
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CompiledUrlGeneratorDumper.php
│   │   │   │   │   ├── GeneratorDumper.php
│   │   │   │   │   └── GeneratorDumperInterface.php
│   │   │   │   ├── CompiledUrlGenerator.php
│   │   │   │   ├── ConfigurableRequirementsInterface.php
│   │   │   │   ├── UrlGenerator.php
│   │   │   │   └── UrlGeneratorInterface.php
│   │   │   ├── Loader
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── Traits
│   │   │   │   │   │   ├── AddTrait.php
│   │   │   │   │   │   ├── HostTrait.php
│   │   │   │   │   │   ├── LocalizedRouteTrait.php
│   │   │   │   │   │   ├── PrefixTrait.php
│   │   │   │   │   │   └── RouteTrait.php
│   │   │   │   │   ├── AliasConfigurator.php
│   │   │   │   │   ├── CollectionConfigurator.php
│   │   │   │   │   ├── ImportConfigurator.php
│   │   │   │   │   ├── RouteConfigurator.php
│   │   │   │   │   └── RoutingConfigurator.php
│   │   │   │   ├── schema
│   │   │   │   │   └── routing
│   │   │   │   │       └── routing-1.0.xsd
│   │   │   │   ├── AttributeClassLoader.php
│   │   │   │   ├── AttributeDirectoryLoader.php
│   │   │   │   ├── AttributeFileLoader.php
│   │   │   │   ├── ClosureLoader.php
│   │   │   │   ├── ContainerLoader.php
│   │   │   │   ├── DirectoryLoader.php
│   │   │   │   ├── GlobFileLoader.php
│   │   │   │   ├── ObjectLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── Psr4DirectoryLoader.php
│   │   │   │   ├── XmlFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── Matcher
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CompiledUrlMatcherDumper.php
│   │   │   │   │   ├── CompiledUrlMatcherTrait.php
│   │   │   │   │   ├── MatcherDumper.php
│   │   │   │   │   ├── MatcherDumperInterface.php
│   │   │   │   │   └── StaticPrefixCollection.php
│   │   │   │   ├── CompiledUrlMatcher.php
│   │   │   │   ├── ExpressionLanguageProvider.php
│   │   │   │   ├── RedirectableUrlMatcher.php
│   │   │   │   ├── RedirectableUrlMatcherInterface.php
│   │   │   │   ├── RequestMatcherInterface.php
│   │   │   │   ├── TraceableUrlMatcher.php
│   │   │   │   ├── UrlMatcher.php
│   │   │   │   └── UrlMatcherInterface.php
│   │   │   ├── Requirement
│   │   │   │   ├── EnumRequirement.php
│   │   │   │   └── Requirement.php
│   │   │   ├── Alias.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CompiledRoute.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── RequestContext.php
│   │   │   ├── RequestContextAwareInterface.php
│   │   │   ├── Route.php
│   │   │   ├── RouteCollection.php
│   │   │   ├── RouteCompiler.php
│   │   │   ├── RouteCompilerInterface.php
│   │   │   ├── Router.php
│   │   │   └── RouterInterface.php
│   │   ├── service-contracts
│   │   │   ├── Attribute
│   │   │   │   ├── Required.php
│   │   │   │   └── SubscribedService.php
│   │   │   ├── Test
│   │   │   │   ├── ServiceLocatorTest.php
│   │   │   │   └── ServiceLocatorTestCase.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── ResetInterface.php
│   │   │   ├── ServiceCollectionInterface.php
│   │   │   ├── ServiceLocatorTrait.php
│   │   │   ├── ServiceMethodsSubscriberTrait.php
│   │   │   ├── ServiceProviderInterface.php
│   │   │   ├── ServiceSubscriberInterface.php
│   │   │   └── ServiceSubscriberTrait.php
│   │   ├── string
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Inflector
│   │   │   │   ├── EnglishInflector.php
│   │   │   │   ├── FrenchInflector.php
│   │   │   │   ├── InflectorInterface.php
│   │   │   │   └── SpanishInflector.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   ├── data
│   │   │   │   │   ├── wcswidth_table_wide.php
│   │   │   │   │   └── wcswidth_table_zero.php
│   │   │   │   └── functions.php
│   │   │   ├── Slugger
│   │   │   │   ├── AsciiSlugger.php
│   │   │   │   └── SluggerInterface.php
│   │   │   ├── AbstractString.php
│   │   │   ├── AbstractUnicodeString.php
│   │   │   ├── ByteString.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CodePointString.php
│   │   │   ├── composer.json
│   │   │   ├── LazyString.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── TruncateMode.php
│   │   │   └── UnicodeString.php
│   │   ├── translation
│   │   │   ├── Catalogue
│   │   │   │   ├── AbstractOperation.php
│   │   │   │   ├── MergeOperation.php
│   │   │   │   ├── OperationInterface.php
│   │   │   │   └── TargetOperation.php
│   │   │   ├── Command
│   │   │   │   ├── TranslationLintCommand.php
│   │   │   │   ├── TranslationPullCommand.php
│   │   │   │   ├── TranslationPushCommand.php
│   │   │   │   ├── TranslationTrait.php
│   │   │   │   └── XliffLintCommand.php
│   │   │   ├── DataCollector
│   │   │   │   └── TranslationDataCollector.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── DataCollectorTranslatorPass.php
│   │   │   │   ├── LoggingTranslatorPass.php
│   │   │   │   ├── TranslationDumperPass.php
│   │   │   │   ├── TranslationExtractorPass.php
│   │   │   │   ├── TranslatorPass.php
│   │   │   │   └── TranslatorPathsPass.php
│   │   │   ├── Dumper
│   │   │   │   ├── CsvFileDumper.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── FileDumper.php
│   │   │   │   ├── IcuResFileDumper.php
│   │   │   │   ├── IniFileDumper.php
│   │   │   │   ├── JsonFileDumper.php
│   │   │   │   ├── MoFileDumper.php
│   │   │   │   ├── PhpFileDumper.php
│   │   │   │   ├── PoFileDumper.php
│   │   │   │   ├── QtFileDumper.php
│   │   │   │   ├── XliffFileDumper.php
│   │   │   │   └── YamlFileDumper.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── IncompleteDsnException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidResourceException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MissingRequiredOptionException.php
│   │   │   │   ├── NotFoundResourceException.php
│   │   │   │   ├── ProviderException.php
│   │   │   │   ├── ProviderExceptionInterface.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   └── UnsupportedSchemeException.php
│   │   │   ├── Extractor
│   │   │   │   ├── Visitor
│   │   │   │   │   ├── AbstractVisitor.php
│   │   │   │   │   ├── ConstraintVisitor.php
│   │   │   │   │   ├── TranslatableMessageVisitor.php
│   │   │   │   │   └── TransMethodVisitor.php
│   │   │   │   ├── AbstractFileExtractor.php
│   │   │   │   ├── ChainExtractor.php
│   │   │   │   ├── ExtractorInterface.php
│   │   │   │   └── PhpAstExtractor.php
│   │   │   ├── Formatter
│   │   │   │   ├── IntlFormatter.php
│   │   │   │   ├── IntlFormatterInterface.php
│   │   │   │   ├── MessageFormatter.php
│   │   │   │   └── MessageFormatterInterface.php
│   │   │   ├── Loader
│   │   │   │   ├── ArrayLoader.php
│   │   │   │   ├── CsvFileLoader.php
│   │   │   │   ├── FileLoader.php
│   │   │   │   ├── IcuDatFileLoader.php
│   │   │   │   ├── IcuResFileLoader.php
│   │   │   │   ├── IniFileLoader.php
│   │   │   │   ├── JsonFileLoader.php
│   │   │   │   ├── LoaderInterface.php
│   │   │   │   ├── MoFileLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── PoFileLoader.php
│   │   │   │   ├── QtFileLoader.php
│   │   │   │   ├── XliffFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── Provider
│   │   │   │   ├── AbstractProviderFactory.php
│   │   │   │   ├── Dsn.php
│   │   │   │   ├── FilteringProvider.php
│   │   │   │   ├── NullProvider.php
│   │   │   │   ├── NullProviderFactory.php
│   │   │   │   ├── ProviderFactoryInterface.php
│   │   │   │   ├── ProviderInterface.php
│   │   │   │   ├── TranslationProviderCollection.php
│   │   │   │   └── TranslationProviderCollectionFactory.php
│   │   │   ├── Reader
│   │   │   │   ├── TranslationReader.php
│   │   │   │   └── TranslationReaderInterface.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── translation-status.php
│   │   │   │   ├── data
│   │   │   │   │   └── parents.json
│   │   │   │   ├── schemas
│   │   │   │   │   ├── xliff-core-1.2-transitional.xsd
│   │   │   │   │   ├── xliff-core-2.0.xsd
│   │   │   │   │   └── xml.xsd
│   │   │   │   └── functions.php
│   │   │   ├── Test
│   │   │   │   ├── AbstractProviderFactoryTestCase.php
│   │   │   │   ├── IncompleteDsnTestTrait.php
│   │   │   │   ├── ProviderFactoryTestCase.php
│   │   │   │   └── ProviderTestCase.php
│   │   │   ├── Util
│   │   │   │   ├── ArrayConverter.php
│   │   │   │   └── XliffUtils.php
│   │   │   ├── Writer
│   │   │   │   ├── TranslationWriter.php
│   │   │   │   └── TranslationWriterInterface.php
│   │   │   ├── CatalogueMetadataAwareInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── DataCollectorTranslator.php
│   │   │   ├── IdentityTranslator.php
│   │   │   ├── LICENSE
│   │   │   ├── LocaleSwitcher.php
│   │   │   ├── LoggingTranslator.php
│   │   │   ├── MessageCatalogue.php
│   │   │   ├── MessageCatalogueInterface.php
│   │   │   ├── MetadataAwareInterface.php
│   │   │   ├── PseudoLocalizationTranslator.php
│   │   │   ├── README.md
│   │   │   ├── TranslatableMessage.php
│   │   │   ├── Translator.php
│   │   │   ├── TranslatorBag.php
│   │   │   └── TranslatorBagInterface.php
│   │   ├── translation-contracts
│   │   │   ├── Test
│   │   │   │   └── TranslatorTest.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── LocaleAwareInterface.php
│   │   │   ├── README.md
│   │   │   ├── TranslatableInterface.php
│   │   │   ├── TranslatorInterface.php
│   │   │   └── TranslatorTrait.php
│   │   ├── uid
│   │   │   ├── Command
│   │   │   │   ├── GenerateUlidCommand.php
│   │   │   │   ├── GenerateUuidCommand.php
│   │   │   │   ├── InspectUlidCommand.php
│   │   │   │   └── InspectUuidCommand.php
│   │   │   ├── Factory
│   │   │   │   ├── NameBasedUuidFactory.php
│   │   │   │   ├── RandomBasedUuidFactory.php
│   │   │   │   ├── TimeBasedUuidFactory.php
│   │   │   │   ├── UlidFactory.php
│   │   │   │   └── UuidFactory.php
│   │   │   ├── AbstractUid.php
│   │   │   ├── BinaryUtil.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── HashableInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── MaxUlid.php
│   │   │   ├── MaxUuid.php
│   │   │   ├── NilUlid.php
│   │   │   ├── NilUuid.php
│   │   │   ├── README.md
│   │   │   ├── TimeBasedUidInterface.php
│   │   │   ├── Ulid.php
│   │   │   ├── Uuid.php
│   │   │   ├── UuidV1.php
│   │   │   ├── UuidV3.php
│   │   │   ├── UuidV4.php
│   │   │   ├── UuidV5.php
│   │   │   ├── UuidV6.php
│   │   │   ├── UuidV7.php
│   │   │   └── UuidV8.php
│   │   ├── var-dumper
│   │   │   ├── Caster
│   │   │   │   ├── AmqpCaster.php
│   │   │   │   ├── ArgsStub.php
│   │   │   │   ├── Caster.php
│   │   │   │   ├── ClassStub.php
│   │   │   │   ├── ConstStub.php
│   │   │   │   ├── CutArrayStub.php
│   │   │   │   ├── CutStub.php
│   │   │   │   ├── DateCaster.php
│   │   │   │   ├── DoctrineCaster.php
│   │   │   │   ├── DOMCaster.php
│   │   │   │   ├── DsCaster.php
│   │   │   │   ├── DsPairStub.php
│   │   │   │   ├── EnumStub.php
│   │   │   │   ├── ExceptionCaster.php
│   │   │   │   ├── FFICaster.php
│   │   │   │   ├── FiberCaster.php
│   │   │   │   ├── FrameStub.php
│   │   │   │   ├── GmpCaster.php
│   │   │   │   ├── ImagineCaster.php
│   │   │   │   ├── ImgStub.php
│   │   │   │   ├── IntlCaster.php
│   │   │   │   ├── LinkStub.php
│   │   │   │   ├── MemcachedCaster.php
│   │   │   │   ├── MysqliCaster.php
│   │   │   │   ├── PdoCaster.php
│   │   │   │   ├── PgSqlCaster.php
│   │   │   │   ├── ProxyManagerCaster.php
│   │   │   │   ├── RdKafkaCaster.php
│   │   │   │   ├── RedisCaster.php
│   │   │   │   ├── ReflectionCaster.php
│   │   │   │   ├── ResourceCaster.php
│   │   │   │   ├── ScalarStub.php
│   │   │   │   ├── SplCaster.php
│   │   │   │   ├── StubCaster.php
│   │   │   │   ├── SymfonyCaster.php
│   │   │   │   ├── TraceStub.php
│   │   │   │   ├── UninitializedStub.php
│   │   │   │   ├── UuidCaster.php
│   │   │   │   ├── VirtualStub.php
│   │   │   │   ├── XmlReaderCaster.php
│   │   │   │   └── XmlResourceCaster.php
│   │   │   ├── Cloner
│   │   │   │   ├── Internal
│   │   │   │   │   └── NoDefault.php
│   │   │   │   ├── AbstractCloner.php
│   │   │   │   ├── ClonerInterface.php
│   │   │   │   ├── Cursor.php
│   │   │   │   ├── Data.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── Stub.php
│   │   │   │   └── VarCloner.php
│   │   │   ├── Command
│   │   │   │   ├── Descriptor
│   │   │   │   │   ├── CliDescriptor.php
│   │   │   │   │   ├── DumpDescriptorInterface.php
│   │   │   │   │   └── HtmlDescriptor.php
│   │   │   │   └── ServerDumpCommand.php
│   │   │   ├── Dumper
│   │   │   │   ├── ContextProvider
│   │   │   │   │   ├── CliContextProvider.php
│   │   │   │   │   ├── ContextProviderInterface.php
│   │   │   │   │   ├── RequestContextProvider.php
│   │   │   │   │   └── SourceContextProvider.php
│   │   │   │   ├── AbstractDumper.php
│   │   │   │   ├── CliDumper.php
│   │   │   │   ├── ContextualizedDumper.php
│   │   │   │   ├── DataDumperInterface.php
│   │   │   │   ├── HtmlDumper.php
│   │   │   │   └── ServerDumper.php
│   │   │   ├── Exception
│   │   │   │   └── ThrowingCasterException.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── var-dump-server
│   │   │   │   ├── css
│   │   │   │   │   └── htmlDescriptor.css
│   │   │   │   ├── functions
│   │   │   │   │   └── dump.php
│   │   │   │   └── js
│   │   │   │       └── htmlDescriptor.js
│   │   │   ├── Server
│   │   │   │   ├── Connection.php
│   │   │   │   └── DumpServer.php
│   │   │   ├── Test
│   │   │   │   └── VarDumperTestTrait.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── VarDumper.php
│   │   └── yaml
│   │       ├── Command
│   │       │   └── LintCommand.php
│   │       ├── Exception
│   │       │   ├── DumpException.php
│   │       │   ├── ExceptionInterface.php
│   │       │   ├── ParseException.php
│   │       │   └── RuntimeException.php
│   │       ├── Resources
│   │       │   └── bin
│   │       │       └── yaml-lint
│   │       ├── Tag
│   │       │   └── TaggedValue.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── Dumper.php
│   │       ├── Escaper.php
│   │       ├── Inline.php
│   │       ├── LICENSE
│   │       ├── Parser.php
│   │       ├── README.md
│   │       ├── Unescaper.php
│   │       └── Yaml.php
│   ├── theseer
│   │   └── tokenizer
│   │       ├── src
│   │       │   ├── Exception.php
│   │       │   ├── NamespaceUri.php
│   │       │   ├── NamespaceUriException.php
│   │       │   ├── Token.php
│   │       │   ├── TokenCollection.php
│   │       │   ├── TokenCollectionException.php
│   │       │   ├── Tokenizer.php
│   │       │   └── XMLSerializer.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── LICENSE
│   │       └── README.md
│   ├── tijsverkoyen
│   │   └── css-to-inline-styles
│   │       ├── src
│   │       │   ├── Css
│   │       │   │   ├── Property
│   │       │   │   │   ├── Processor.php
│   │       │   │   │   └── Property.php
│   │       │   │   ├── Rule
│   │       │   │   │   ├── Processor.php
│   │       │   │   │   └── Rule.php
│   │       │   │   └── Processor.php
│   │       │   └── CssToInlineStyles.php
│   │       ├── composer.json
│   │       └── LICENSE.md
│   ├── vlucas
│   │   └── phpdotenv
│   │       ├── src
│   │       │   ├── Exception
│   │       │   │   ├── ExceptionInterface.php
│   │       │   │   ├── InvalidEncodingException.php
│   │       │   │   ├── InvalidFileException.php
│   │       │   │   ├── InvalidPathException.php
│   │       │   │   └── ValidationException.php
│   │       │   ├── Loader
│   │       │   │   ├── Loader.php
│   │       │   │   ├── LoaderInterface.php
│   │       │   │   └── Resolver.php
│   │       │   ├── Parser
│   │       │   │   ├── Entry.php
│   │       │   │   ├── EntryParser.php
│   │       │   │   ├── Lexer.php
│   │       │   │   ├── Lines.php
│   │       │   │   ├── Parser.php
│   │       │   │   ├── ParserInterface.php
│   │       │   │   └── Value.php
│   │       │   ├── Repository
│   │       │   │   ├── Adapter
│   │       │   │   │   ├── AdapterInterface.php
│   │       │   │   │   ├── ApacheAdapter.php
│   │       │   │   │   ├── ArrayAdapter.php
│   │       │   │   │   ├── EnvConstAdapter.php
│   │       │   │   │   ├── GuardedWriter.php
│   │       │   │   │   ├── ImmutableWriter.php
│   │       │   │   │   ├── MultiReader.php
│   │       │   │   │   ├── MultiWriter.php
│   │       │   │   │   ├── PutenvAdapter.php
│   │       │   │   │   ├── ReaderInterface.php
│   │       │   │   │   ├── ReplacingWriter.php
│   │       │   │   │   ├── ServerConstAdapter.php
│   │       │   │   │   └── WriterInterface.php
│   │       │   │   ├── AdapterRepository.php
│   │       │   │   ├── RepositoryBuilder.php
│   │       │   │   └── RepositoryInterface.php
│   │       │   ├── Store
│   │       │   │   ├── File
│   │       │   │   │   ├── Paths.php
│   │       │   │   │   └── Reader.php
│   │       │   │   ├── FileStore.php
│   │       │   │   ├── StoreBuilder.php
│   │       │   │   ├── StoreInterface.php
│   │       │   │   └── StringStore.php
│   │       │   ├── Util
│   │       │   │   ├── Regex.php
│   │       │   │   └── Str.php
│   │       │   ├── Dotenv.php
│   │       │   └── Validator.php
│   │       ├── composer.json
│   │       └── LICENSE
│   ├── voku
│   │   └── portable-ascii
│   │       ├── src
│   │       │   └── voku
│   │       │       └── helper
│   │       │           ├── data
│   │       │           │   ├── ascii_by_languages.php
│   │       │           │   ├── ascii_extras_by_languages.php
│   │       │           │   ├── ascii_language_max_key.php
│   │       │           │   ├── ascii_ord.php
│   │       │           │   ├── x000.php
│   │       │           │   ├── x001.php
│   │       │           │   ├── x002.php
│   │       │           │   ├── x003.php
│   │       │           │   ├── x004.php
│   │       │           │   ├── x005.php
│   │       │           │   ├── x006.php
│   │       │           │   ├── x007.php
│   │       │           │   ├── x009.php
│   │       │           │   ├── x00a.php
│   │       │           │   ├── x00b.php
│   │       │           │   ├── x00c.php
│   │       │           │   ├── x00d.php
│   │       │           │   ├── x00e.php
│   │       │           │   ├── x00f.php
│   │       │           │   ├── x010.php
│   │       │           │   ├── x011.php
│   │       │           │   ├── x012.php
│   │       │           │   ├── x013.php
│   │       │           │   ├── x014.php
│   │       │           │   ├── x015.php
│   │       │           │   ├── x016.php
│   │       │           │   ├── x017.php
│   │       │           │   ├── x018.php
│   │       │           │   ├── x01d.php
│   │       │           │   ├── x01e.php
│   │       │           │   ├── x01f.php
│   │       │           │   ├── x020.php
│   │       │           │   ├── x021.php
│   │       │           │   ├── x022.php
│   │       │           │   ├── x023.php
│   │       │           │   ├── x024.php
│   │       │           │   ├── x025.php
│   │       │           │   ├── x026.php
│   │       │           │   ├── x027.php
│   │       │           │   ├── x028.php
│   │       │           │   ├── x029.php
│   │       │           │   ├── x02a.php
│   │       │           │   ├── x02c.php
│   │       │           │   ├── x02e.php
│   │       │           │   ├── x02f.php
│   │       │           │   ├── x030.php
│   │       │           │   ├── x031.php
│   │       │           │   ├── x032.php
│   │       │           │   ├── x033.php
│   │       │           │   ├── x04d.php
│   │       │           │   ├── x04e.php
│   │       │           │   ├── x04f.php
│   │       │           │   ├── x050.php
│   │       │           │   ├── x051.php
│   │       │           │   ├── x052.php
│   │       │           │   ├── x053.php
│   │       │           │   ├── x054.php
│   │       │           │   ├── x055.php
│   │       │           │   ├── x056.php
│   │       │           │   ├── x057.php
│   │       │           │   ├── x058.php
│   │       │           │   ├── x059.php
│   │       │           │   ├── x05a.php
│   │       │           │   ├── x05b.php
│   │       │           │   ├── x05c.php
│   │       │           │   ├── x05d.php
│   │       │           │   ├── x05e.php
│   │       │           │   ├── x05f.php
│   │       │           │   ├── x060.php
│   │       │           │   ├── x061.php
│   │       │           │   ├── x062.php
│   │       │           │   ├── x063.php
│   │       │           │   ├── x064.php
│   │       │           │   ├── x065.php
│   │       │           │   ├── x066.php
│   │       │           │   ├── x067.php
│   │       │           │   ├── x068.php
│   │       │           │   ├── x069.php
│   │       │           │   ├── x06a.php
│   │       │           │   ├── x06b.php
│   │       │           │   ├── x06c.php
│   │       │           │   ├── x06d.php
│   │       │           │   ├── x06e.php
│   │       │           │   ├── x06f.php
│   │       │           │   ├── x070.php
│   │       │           │   ├── x071.php
│   │       │           │   ├── x072.php
│   │       │           │   ├── x073.php
│   │       │           │   ├── x074.php
│   │       │           │   ├── x075.php
│   │       │           │   ├── x076.php
│   │       │           │   ├── x077.php
│   │       │           │   ├── x078.php
│   │       │           │   ├── x079.php
│   │       │           │   ├── x07a.php
│   │       │           │   ├── x07b.php
│   │       │           │   ├── x07c.php
│   │       │           │   ├── x07d.php
│   │       │           │   ├── x07e.php
│   │       │           │   ├── x07f.php
│   │       │           │   ├── x080.php
│   │       │           │   ├── x081.php
│   │       │           │   ├── x082.php
│   │       │           │   ├── x083.php
│   │       │           │   ├── x084.php
│   │       │           │   ├── x085.php
│   │       │           │   ├── x086.php
│   │       │           │   ├── x087.php
│   │       │           │   ├── x088.php
│   │       │           │   ├── x089.php
│   │       │           │   ├── x08a.php
│   │       │           │   ├── x08b.php
│   │       │           │   ├── x08c.php
│   │       │           │   ├── x08d.php
│   │       │           │   ├── x08e.php
│   │       │           │   ├── x08f.php
│   │       │           │   ├── x090.php
│   │       │           │   ├── x091.php
│   │       │           │   ├── x092.php
│   │       │           │   ├── x093.php
│   │       │           │   ├── x094.php
│   │       │           │   ├── x095.php
│   │       │           │   ├── x096.php
│   │       │           │   ├── x097.php
│   │       │           │   ├── x098.php
│   │       │           │   ├── x099.php
│   │       │           │   ├── x09a.php
│   │       │           │   ├── x09b.php
│   │       │           │   ├── x09c.php
│   │       │           │   ├── x09d.php
│   │       │           │   ├── x09e.php
│   │       │           │   ├── x09f.php
│   │       │           │   ├── x0a0.php
│   │       │           │   ├── x0a1.php
│   │       │           │   ├── x0a2.php
│   │       │           │   ├── x0a3.php
│   │       │           │   ├── x0a4.php
│   │       │           │   ├── x0ac.php
│   │       │           │   ├── x0ad.php
│   │       │           │   ├── x0ae.php
│   │       │           │   ├── x0af.php
│   │       │           │   ├── x0b0.php
│   │       │           │   ├── x0b1.php
│   │       │           │   ├── x0b2.php
│   │       │           │   ├── x0b3.php
│   │       │           │   ├── x0b4.php
│   │       │           │   ├── x0b5.php
│   │       │           │   ├── x0b6.php
│   │       │           │   ├── x0b7.php
│   │       │           │   ├── x0b8.php
│   │       │           │   ├── x0b9.php
│   │       │           │   ├── x0ba.php
│   │       │           │   ├── x0bb.php
│   │       │           │   ├── x0bc.php
│   │       │           │   ├── x0bd.php
│   │       │           │   ├── x0be.php
│   │       │           │   ├── x0bf.php
│   │       │           │   ├── x0c0.php
│   │       │           │   ├── x0c1.php
│   │       │           │   ├── x0c2.php
│   │       │           │   ├── x0c3.php
│   │       │           │   ├── x0c4.php
│   │       │           │   ├── x0c5.php
│   │       │           │   ├── x0c6.php
│   │       │           │   ├── x0c7.php
│   │       │           │   ├── x0c8.php
│   │       │           │   ├── x0c9.php
│   │       │           │   ├── x0ca.php
│   │       │           │   ├── x0cb.php
│   │       │           │   ├── x0cc.php
│   │       │           │   ├── x0cd.php
│   │       │           │   ├── x0ce.php
│   │       │           │   ├── x0cf.php
│   │       │           │   ├── x0d0.php
│   │       │           │   ├── x0d1.php
│   │       │           │   ├── x0d2.php
│   │       │           │   ├── x0d3.php
│   │       │           │   ├── x0d4.php
│   │       │           │   ├── x0d5.php
│   │       │           │   ├── x0d6.php
│   │       │           │   ├── x0d7.php
│   │       │           │   ├── x0f9.php
│   │       │           │   ├── x0fa.php
│   │       │           │   ├── x0fb.php
│   │       │           │   ├── x0fc.php
│   │       │           │   ├── x0fd.php
│   │       │           │   ├── x0fe.php
│   │       │           │   ├── x0ff.php
│   │       │           │   ├── x1d4.php
│   │       │           │   ├── x1d5.php
│   │       │           │   ├── x1d6.php
│   │       │           │   ├── x1d7.php
│   │       │           │   └── x1f1.php
│   │       │           └── ASCII.php
│   │       ├── .deepsource.toml
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE.txt
│   │       └── README.md
│   ├── webmozart
│   │   └── assert
│   │       ├── src
│   │       │   ├── Assert.php
│   │       │   ├── InvalidArgumentException.php
│   │       │   └── Mixin.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   └── autoload.php
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package-lock.json
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
