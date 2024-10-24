Pàgina Principal:
- Crea una pàgina principal que, mitjançant un formulari, demani a l’usuari que triï el tipus de figura.

- En fer clic al botó, redirigeix a una altra pàgina que demani a l’usuari introduir un o dos costats depenent de la figura escollida.

- Un cop introduït el costat o els costats, el programa calcularà l’àrea i el perímetre.

- La sortida per pantalla mostrarà: el tipus de figura, el costat o els costats introduïts, el resultat de l’àrea i el perímetre.


Conservació de dades mitjançant sessions:
- Utilitza sessions PHP per a conservar les dades introduïdes pel formulari.
- Quan l'usuari introdueixi les dades (tipus de figura, costat o costats), guarda aquestes dades a les variables de sessió.
- A la pàgina de resultats, recupera les dades de la sessió per mostrar els costats introduïts i els càlculs d'àrea i perímetre.
- Si l'usuari torna enrere al formulari per modificar les dades, assegura’t que aquestes es carreguin automàticament als camps del formulari des de la sessió.

Classes:
- Genera la classe “FiguraGeometrica” amb dos atributs anomenats tipoFigura y  lado1.  
    Genera els mètodes getters i setters.
    Genera el constructor amb tots els seus atributs i el destructor.
    Aquesta classe inclourà un mètode calcularArea() que inicialment no tindrà funcionalitat concreta (pots deixar un missatge que indiqui que ha de ser sobreescrit si és necessari).

- Genera la classe “Triangulo” que hereti  de FiguraGeometrica. 
    Afegeix dos atributs lado2 i lado3 específics per a aquesta classe.
    Genera el constructor amb tots els seus atributs i el destructor.
    Implementa els mètodes getters i setters per a cada atribut.
    Defineix el mètode calcularArea() que retorni l’àrea del triangle.
    Afegeix un mètode calcularPerimetre() per calcular el perímetre del triangle.
    Afegeix el mètode màgic __toString() per tornar la descripció de la figura.

- Genera la classe “Rectangulo” que hereti  de FiguraGeometrica. 
    Afegeix un atribut lado2 específic per a aquesta classe.
    Genera el constructor amb tots els seus atributs i el destructor.
    Implementa els mètodes getters i setters per a cada atribut.
    Defineix el mètode calcularArea() que retorni l’àrea del rectangle.
    Afegeix un mètode calcularPerimetre() per calcular el perímetre del rectangle.
    Afegeix el mètode màgic __toString() per tornar la descripció de la figura.

- Genera la classe “Cuadrado” que hereti  de FiguraGeometrica. 
    Genera el constructor amb tots els seus atributs i el destructor.
    Defineix el mètode calcularArea() que retorni l’àrea del quadrat.
    Afegeix un mètode calcularPerimetre() per calcular el perímetre del quadrat.
    Afegeix el mètode __toString() per tornar la descripció de la figura.


- Genera la classe “Circulo” que hereti  de FiguraGeometrica. 
    Genera el constructor amb tots els seus atributs i el destructor.
    Defineix el mètode calcularArea() que retorni l’àrea del quadrat.
    Afegeix un mètode calcularPerimetre() per calcular el perímetre del quadrat.
    Afegeix el mètode __toString() per tornar la descripció de la figura