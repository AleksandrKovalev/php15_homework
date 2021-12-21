document.addEventListener('DOMContentLoaded', function() {


    let urlData = "selectdb.php";

    async function getPosts(arg){
        let response = await fetch(arg);
        if(!response.ok){
            throw new Error(`HTTP error! status: ${response.status}`);
        } else{
            return await response.json();
        }
    }

    let count = 0;



    $(document).ready(function (){
        $('button.add').on('click', function (){
            let authorValue = $('input.author').val();
            let articleValue = $('textarea.article').val();

            $.ajax({
                method: "POST",
                url: "insertdb.php",
                data: { author: authorValue, article: articleValue }
            })
                .done(function() {

                    getPosts(urlData).then((response) => {
                        count++;
                            // let elementExists = !!document.getElementById("tbl");
                            //
                            let table = document.getElementById('tbl');
                            let tr = document.createElement('tr');
                            let td1 = document.createElement('td');
                            let td2 = document.createElement('td');
                            let td3 = document.createElement('td');

                        for(let index = 0; index < response.length; index++){
                            if(count <= 1){

                                let table = document.getElementById('tbl');
                                let tr = document.createElement('tr');
                                let td1 = document.createElement('td');
                                let td2 = document.createElement('td');
                                let td3 = document.createElement('td');
                                 //tr.parentNode.removeChild(tr);
                                table.appendChild(tr);
                                tr.appendChild(td1);
                                tr.appendChild(td2);
                                tr.appendChild(td3);

                                td1.innerHTML = response[index].id;
                                td2.innerHTML = response[index].title;
                                td3.innerHTML = response[index].author;
                                console.log('if');
                            }else{
                                table.appendChild(tr);
                                tr.appendChild(td1);
                                tr.appendChild(td2);
                                tr.appendChild(td3);

                                td1.innerHTML = response[index].id;
                                td2.innerHTML = response[index].title;
                                td3.innerHTML = response[index].author;
                                console.log('else');
                            }
                        }
                        return response;
                    }).catch(e => console.log(e));
                });
            $('input.author').val('');
            $('textarea.article').val('');
            //console.log(authorValue, articleValue);
        })
    });












});