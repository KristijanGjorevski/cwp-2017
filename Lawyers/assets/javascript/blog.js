const container = document.querySelector(".post_container");

//                 Set attribute -> template



fetch("assets/json/posts.json")
    // .then((res) => JSON.parse(res))
    .then(res => res.json())
    .then(res => {

        // generate templates to DOM
        for (let index = 0; index < res.length; index++) {
            const element = res[index];
            //console.log(element);


            // create elements
            const templateContainer = document.createElement("div");
            const dateContainer = document.createElement("div");
            const currDay = document.createElement("span");
            const currDate = document.createElement("span");
            const imgFigure = document.createElement("figure");
            const img = document.createElement("img");
            const content = document.createElement("div");
            const heading = document.createElement("h3");
            const paragraph = document.createElement("p");
            const userName = document.createElement("span");
            const nameIcon = document.createElement("i");
            const userType = document.createElement("span");
            const typeIcon = document.createElement("i");
            const membersComments = document.createElement("span");
            const commentIcon = document.createElement("i");

            // get date
            let getDate = new Date;
            // alert(getDate.getFullYear() + "-" + getDate.getMonth() + "-" + getDate.getDay());

            let checkDay = getDate.getDay();
            let checkMonth = getDate.getMonth();

            // set attribute to elements
            templateContainer.setAttribute("class", "post_template");

            dateContainer.setAttribute("class", "post_date");
            currDay.setAttribute("class", "curr_day");
            currDate.setAttribute("class", "curr_date");

            imgFigure.setAttribute("class", "post_img");
            imgFigure.setAttribute("alt", "image");

            content.setAttribute("class", "content");
            userName.setAttribute("class", "user_name");
            nameIcon.setAttribute("class", "fab fa-opencart");
            nameIcon.setAttribute("data-fa-transform", "shrink-4 left-6");

            userType.setAttribute("class", "user_type");
            typeIcon.setAttribute("class", "fas fa-folder");
            typeIcon.setAttribute("data-fa-transform", "shrink-4 left-6");

            membersComments.setAttribute("class", "numb_comments");
            commentIcon.setAttribute("class", "far fa-comment-alt");
            commentIcon.setAttribute("data-fa-transform", "shrink-4 left-6");

            //fulfill elements with content
            img.src = element.picture;
            heading.innerHTML = element.title;
            userName.innerHTML = element.name;
            paragraph.innerHTML = element.content;

            if (checkDay.toString().length == 1) {
                currDay.innerHTML = "0" + checkDay;
            } else {
                currDay.innerHTML = checkDay;
            }
            if (checkMonth.toString().length == 1) {
                currDate.innerHTML = "0" + checkMonth + "." + getDate.getFullYear();
            } else {
                currDate.innerHTML = checkMonth + "." + getDate.getFullYear();
            }

            // append to body
            container.appendChild(templateContainer);
            templateContainer.appendChild(dateContainer);
            dateContainer.appendChild(currDay);
            dateContainer.appendChild(currDate);

            templateContainer.appendChild(imgFigure);
            imgFigure.appendChild(img);
            templateContainer.appendChild(content);
            content.appendChild(heading);
            content.appendChild(paragraph);
            content.appendChild(userName);
            userName.insertBefore(nameIcon, userName.firstChild);
            content.appendChild(userType);
            userType.insertBefore(typeIcon, userType.firstChild);
            content.appendChild(membersComments);
            membersComments.insertBefore(commentIcon, membersComments.firstChild);


        }
    });