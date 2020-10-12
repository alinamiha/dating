let html_text = "<option value=\"to\" disabled>To</option>"
for (let i = 18; i <= 75; i ++){
    html_text += "<option value='" + i +"'>" + i +"</option>"
}
$('#from-age').html(html_text)
$('#to-age').html(html_text)

let arr = [1,2, 34,4, 5]
let obj = {
    name: 'Alina',
    age: 19,
    city: "Odessa"
}
let mass = '[1,2,3,4,5]'
console.log(JSON.stringify(mass))