// function loadContent(page){
//     fetch(page)
//     .then(response => {
//         if(!response.ok){
//             throw new Error("Error to load the page.");
//         }
//         return response.text();
//     })
//     .then(data => {
//         document.getElementById("content").innerHTML = data;
//     })
//     .catch(error => {
//         document.getElementById("content").innerHTML = "<p>Error to load the content.</p>";
//         console.error("Error: ", error);
//     });
// }


function loadContent(page){
    fetch(page)
    .then(response => {
        if(!response.ok){
            throw new Error("Error to load the page.");
        }
        return response.text();
    })
    .then(data => {
        document.getElementById("content").innerHTML = data;
    })
    .catch(error => {
        document.getElementById("content").innerHTML = "<p>Error to load the content.</p>";
        console.error("Error: ", error);
    });
}

