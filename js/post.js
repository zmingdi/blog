/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function deletePost(post_id) {
    var confirmation = confirm("确定删除文章？");
    if (!confirmation) {
        return;
    }
    $.ajax({url: "pages/deletePost.php", data: {'post_id': post_id}, method: 'POST', cache: false
        , processData: true
        , dataType: 'json'
        , statusCode: {
            400: function () {
                alert("page not found");
            }
            , 200: function () {
                window.location = "/html5-astral/";
            }
        }
    });
}

function editPost(post_id){
    window.location="/html5-astral/createPost.php?post_id="+post_id;
}
