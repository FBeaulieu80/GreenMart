const CakeTypes = {
  CHEESE: 'cheese',
  CHOCOLATE: 'chocolate',
  CARROT: 'carrot'
};

function isPortrait(image) {
    return image.width < image.height;
}

function toggleAccordion() {
    let accordion = document.getElementsByClassName("accordion")[0];
    let description = accordion.nextElementSibling;

    accordion.classList.toggle("active");

    if (description.style.maxHeight) {
        description.style.maxHeight = null;
    } else {
        description.style.maxHeight = description.scrollHeight + "px";
    }

}

function chooseCake(type) {

    let image = document.getElementById("image").querySelector("img");
    let description = document.getElementById("description");
    let origin = document.getElementById("productOrigin");
    let price = document.getElementById("cakePrice");

    switch (type) {
        case CakeTypes.CARROT:
            image.src = "../../images/bakery/carrot-cake.jpg";
            image.alt = "Carrot Cake";
            description.innerText = "Carrot cake is cake that contains carrots mixed into the batter. Most modern carrot cake recipes have a white cream cheese frosting.";
            origin.innerText = "Product of Australia.";
            price.innerText = "$11.99/ea";
            break;

        case CakeTypes.CHEESE:
            image.src = "../../images/bakery/cheesecake.jpg";
            image.alt = "Cheesecake";
            description.innerText = "A cheesecake can be savory (and served with crackers as an appetizer), however, most of us think of the term as describing a luscious, rich and sweet dessert. The texture can vary greatly-from light and airy to dense and rich to smooth and creamy depending on the ingredients and mixing methods used.";
            origin.innerText = "Product of New-Guinea.";
            price.innerText = "$155.99/ea";
            break;

        case CakeTypes.CHOCOLATE:
            image.src = "../../images/bakery/chocolate-cake.jpg";
            image.alt = "Chocolate Cake";
            description.innerHTML =
                `<p>Chocolate cake is made with chocolate. It can also include other ingredients. These include fudge, vanilla creme, and other sweeteners. The history of chocolate cake goes back to 1764, when Dr. James Baker discovered how to make chocolate by grinding cocoa beans between two massive circular millstones. In 1828, Coenraad van Houten of the Netherlands developed a mechanical extraction method for extracting the fat from cacao liquor resulting in cacao butter and the partly defatted cacao, a compacted mass of solids that could be sold as it was "rock cacao" or ground into powder. The processes transformed chocolate from an exclusive luxury to an inexpensive daily snack. A process for making silkier and smoother chocolate called conching was developed in 1879 by Rodolphe Lindt and made it easier to bake with chocolate, as it amalgamates smoothly and completely with cake batters. Until 1890 to 1900, chocolate recipes were mostly for chocolate drinks, and its presence in cakes was only in fillings and glazes. In 1886, American cooks began adding chocolate to the cake batter, to make the first chocolate cakes in the US.</p>
                 <p>The Duff Company of Pittsburgh, a molasses manufacturer, introduced Devil's food chocolate cake mixes in the mid-1930s, but introduction was put on hold during World War II. Duncan Hines introduced a "Three Star Special" (so called because a white, yellow or chocolate cake could be made from the same mix) was introduced three years after cake mixes from General Mills and Duncan Hines, and took over 48 percent of the market.</p>
                 <p>In the U.S., "chocolate decadence" cakes were popular in the 1980s; in the 1990s, single-serving molten chocolate cakes with liquid chocolate centers and infused chocolates with exotic flavors such as tea, curry, red pepper, passion fruit, and champagne were popular. Chocolate lounges and artisanal chocolate makers were popular in the 2000s. Rich, flourless, all-but-flourless chocolate cakes are "now standard in the modern pâtisserie," according to The New Taste of Chocolate in 2001.<a href="https://en.wikipedia.org/wiki/Chocolate_cake"><sup>[1]</sup></a></p>`;
            origin.innerText = "Product of Madagascar.";
            price.innerText = "$13.99/ea";
            break;

        default:
            console.log("Something went wrong...");
    }
}

var slideIndex = 0;
function slideShow() {
    let i;
    let slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) { slides[i].style.display = 'none'; }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex-1].style.display = "block";
    setTimeout(slideShow, 3000);
}