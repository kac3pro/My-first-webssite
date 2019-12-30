class product {
    constructor(image, name, desc) {
        this.image = image;
        this.name = name;
        this.desc = desc;
    }
}


p = new product("/images/jeans.jpg", "JEANS", "DESCRIPTION");







function generateTemplate(product) {
    let templateScript = document.getElementById("expression-template").innerHTML;
    let template = Handlebars.compile(templateScript);

    let context = {
        "image": product.image,
        "name ": product.name,
        "description": product.description
    };

    //console.log(template(context));
    document.getElementsByClassName("contentPlaceholder").innerHTML = template(context);

}

generateTemplate(p);
