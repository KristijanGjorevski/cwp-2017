var sliki = [{
        title: 'Скопје ~1930г',
        image: 'http://www.staroskopje.vestel.com.mk/sites/simages/5_1.jpg',
        href: 'http://www.staroskopje.vestel.com.mk/sites/c05/c05ulici.html'
    },
    {
        title: 'Автобуси во скопје. 1940г',
        image: 'http://www.velikabritanija.net/wp-content/uploads/2011/10/Skoplje-doubledecker-1.jpeg',
        href: 'http://www.velikabritanija.net/2011/10/11/londonski-autobusi-skoplje/'
    },
    {
        title: 'Првиот македонски филм! 1952г',
        image: 'http://mrt.com.mk/sites/default/files/%D1%84%D1%80%D0%BE%D1%81%D0%B8%D0%BD%D0%B0.jpg',
        href: 'http://mrt.com.mk/node/11083'
    },
    {
        title: 'Земјотресот во Скопје! 1963г',
        image: 'http://mkd-news.com/wp-content/uploads/2012/07/zemjotres1.jpg',
        href: 'http://mrt.com.mk/node/11083'
    },
    {
        title: 'После земјотресот во Скопје! 1963г',
        image: 'http://www.mascontext.com/wp-content/uploads/2012/09/15_i_have_seen_the_master_plan_cover.jpg',
        href: 'http://mrt.com.mk/node/11083'
    },
    {
        title: 'Скопје! 1965г',
        image: 'http://i.imgur.com/ufllsqW.jpg',
        href: 'http://mrt.com.mk/node/11083'
    }

];
var listContainer = document.createElement("ul");

sliki.forEach(function(currentValue) {

    var link = document.createElement("a");
    link.setAttribute("href", currentValue.href);
    link.innerHTML = currentValue.title;
    var templateTitle = document.createElement("h3");
    var img = document.createElement("img");
    img.setAttribute("class", "img");
    img.setAttribute("src", currentValue.image);
    var figure = document.createElement("figure");
    var icons = document.createElement("i");
    icons.setAttribute("class", "fa fa-times-circle-o fa-2x");
    var removeBtn = document.createElement("button");
    removeBtn.setAttribute("class", "delete_btn");

    var li = document.createElement("li");


    figure.appendChild(img);
    templateTitle.appendChild(link);
    figure.appendChild(templateTitle);
    removeBtn.appendChild(icons);
    li.appendChild(figure);
    li.appendChild(removeBtn);
    listContainer.appendChild(li);
});

document.body.appendChild(listContainer);
////////////////////////////////////////////////////////////// model Box
var boxModel = document.createElement("div");
boxModel.setAttribute("id", "zoomContainer");
boxModel.setAttribute("class", "zoom_box");
var boxImg = document.createElement("img");
boxImg.setAttribute("id", "imgfull");
boxImg.setAttribute("class", "pic_box");
var captionText = document.createElement("div");
captionText.setAttribute("id", "caption");


boxModel.appendChild(boxImg);
boxModel.appendChild(captionText);
document.body.appendChild(boxModel);


/////////////////////////////////////////////////////////// contact

var dltBtn = document.querySelectorAll(".delete_btn");
var imgSelector = document.querySelectorAll("figure>img");
var listItems = document.querySelectorAll("li");

////////////////////////////////////////////////  add event listeners
for (i = 0, n = listItems.length; i < n; i++) {
    imgSelector[i].addEventListener("click", zoomPic);
    dltBtn[i].addEventListener("click", removeThread);
}

function removeThread() {
    var confrm = confirm("remove completely?");
    if (confrm) {
        this.parentNode.remove();
    }
}



///////////////////////////////////////////////////////// functions -- remove the list item / zoom picture
function zoomPic() {
    /*var boxModel = document.querySelector('#zoomContainer');*/ ////////container box for zoom
    /* var boxImg = document.querySelector("#imgfull");*/ //////// box for img to put in zoomed
    var link = this.nextElementSibling.firstElementChild.innerHTML;
    console.log(link);

    var embeddedText = captionText; /////// box to display text while in zoom                     //////// close button
    boxModel.style.display = "block";
    boxImg.src = this.src;
    embeddedText.innerHTML = link;

    document.body.style.overflow = "hidden";
    closeBtn.onclick = function() {
        boxModel.style.display = "none";
        document.body.style.overflow = "scroll";
    }
}