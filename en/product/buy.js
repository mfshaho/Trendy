var model={
    iphone14:['128GB', '256GB', '512GB'],
    iphone14pro:['128GB', '256GB', '512GB', '1TB'],
    iphone14promax:['128GB', '256GB', '512GB', '1TB']
}

var main= document.getElementById('main_menu');
var sub= document.getElementById('sub_menu');

main.addEventListener('change', function (){

    var selected_option = model[this.value];

    while(sub.options.length > 0){

        sub.options.remove(0);

    }

    Array.from(selected_option).forEach(function (el){

        let option = new Option(el, el);

        sub.appendChild(option);

    });

});

