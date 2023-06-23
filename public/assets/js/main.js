// ẩn form khi form đó chưa được chọn
var add = document.getElementById('adding')
var del = document.getElementById('deleting')
var edit = document.getElementById('editing')
function showAction(action)
{
    if (action == "them")
    {
        add.setAttribute('class','show')
        del.setAttribute('class','hidden')
        edit.setAttribute('class','hidden')
    }
    else if (action == "xoa")
    {
        add.setAttribute('class','hidden')
        del.setAttribute('class','show')
        edit.setAttribute('class','hidden')
    }
    else{
        add.setAttribute('class','hidden')
        del.setAttribute('class','hidden')
        edit.setAttribute('class','show')
    }
}
