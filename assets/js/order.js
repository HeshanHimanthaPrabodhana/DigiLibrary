/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function selectid(){
    let bookid = document.getElementById('book').value;
 let quantity = document.getElementById('quantity').value;
 let total = bookid*quantity;
 
    document.getElementById('total').value="Rs."+total;
}
function alert(){
    swal("Successfully!", "Order is successfully", "success");
}

