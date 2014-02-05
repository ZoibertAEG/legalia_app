Legalia WebApp
===============

Legalia WebApp is a web application created using PHP
It´s purpose is to serve as GUI to a database.

It is being developed by CNET, with Gorka Hernandez as main dev.

The proyect will obtain BETA status as soon as the level of Full
Basic Functionality has been met. RELEASE will be achieved when
the proyect has achieved a higher level of refinement.

ALPHA revisions will contain minor but constant improvements to
allow for an easier tracking of the proyect and bring improvement
upon future proyects.


>> Full Basic Functionality (BETA)

	Abogados
		* Create
		* Edit
		* Delete
		* Visualize
		BETA - Add Secretario (Secretarios)

	Secretarios
		* Create
		* Edit
		X Delete
		* Visualize
		* Visualize Lawyer

	Clientes
		* Create
		* Edit
		* Delete
		* Visualize

	Auxiliares
		X Create
		X Edit
		X Delete
		X Visualize

	Casos
		X Create
		X Edit
		X Delete
		X Visualize

	Defiende
		X ABOGADO + CASO

	Involucrado
		X CLIENTE + CASO

	Trabaja
		X AUXILIAR + CASO



-------------------------------------
>>         Version History      


v0.1 Alpha (December 24th, 2013 - 18:00)

	- Main page created.
	- Main menu/navigation panel created.
	- Footer created.
	- Minor styling.
	- No functionality as of now.


v0.2 Alpha (December 25th, 2013 - 12:56)

	- Ability to insert lawyers to database implemented.
	- Creation of main formulary page (formulario.php) template.
		* Lawyer formulary created (abogado.php).
	- Ability to drop lawyer data from database implemented.


v0.3 Alpha (December 25th, 2013 - 01:18)

	- Added navbar (nav.php) to formulary pages.


v0.4 Alpha (December 26th, 2013 - 16:34)

	- Lawyers are now displayed in a <table> when entering the lawyer formulary.


v0.5 Alpha (January 8th, 2014 - 23:42)

	- Can create and delete clients from their own page.
	- Can now delete database entries directly from the table display (table.php).
	- Adding entries to the database has been moved to a button in the table display page for every table.
	- PHP segmentation optimization.
	- Mayor layout optimization and improvements.
	- CSS Styling.


v0.5.1 Alpha (January 9th, 2014 - 10:48)

	- Truncated table population PHP files into one with the use of conditionals.

v0.6 Alpha (January 10th, 2014 - 12:57)

	- Ability to edit table data.
	- Added favicon.
	- PHP segmentation optimization.


v0.7 Alpha (January 13th, 2014 - 00:03)

	- Implemented Search capabilities by DNI and Name.
	- Can now create, delete, visualize and edit secretaries.
	- Added a button in the dni_ab field of the secretary table for easy access to the assigned lawyer.
	  This button triggers a lawyer search with the asigned DNI data.
	- Auxiliar data table created. NYI.
	- NYI areas are now highlighted in red.


v0.8 Alpha "Colorful Day" (January 00th, 2014 - 00:00)

	- Major visual overhaul. Intensive CSS work.
	- Implemented CSS3 visual styles.
	-
