//Creación de la clase con funciones en el estandar anterior de JS

//function Car(license, driver) {
//    this.id;
//    this.license = license;
//    this.driver = driver;
//    this.passenger;   
//}
//
//Car.prototype.printDataCar = function () {
//    console.log(this.driver)
//    console.log(this.driver.name)
//    console.log(this.driver.document)
//}


//Creación de la clase con el nuev estandar de JS
class Car {
    constructor(license, driver) {
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    } 

    printDataCar() {
        console.log(this.driver)
        console.log(this.driver.name)
        console.log(this.driver.document)
    }
}