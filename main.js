function genereateTemplate(product) {
    let templateScript = document.getElementById("expression-template");
    let template = Handlebars.compile(templateScript);

    let context = {
        "image": product.image,
        "name ": product.name,
        "description": product.description
    };
    let compiled = template(context);
    document.getElementsByClassName("contentPlaceholder").innerHTML(compiled);

}
