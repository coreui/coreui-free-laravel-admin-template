/* 11.12.2019 */

let self = this;

this.buildSelectParent = function( data ){
    let result = '<option value="none">Do not have parent</option>'
    for(let i = 0; i<data.length; i++){
        result += '<option value="' + data[i].id + '">' + data[i].name + '</option>'
    }
    return result
}

this.updateSelectParent = function(){
    axios.get( '/menu/element/get-parents?menu=' + document.getElementById("menu").value )
    .then(function (response) {
        document.getElementById("parent").innerHTML = self.buildSelectParent(response.data)
    })
    .catch(function (error) {
        // handle error
        console.log(error)
    })
}

this.toggleDivs = function(){
    let value = document.getElementById("type").value
    if(value === 'title'){
        document.getElementById('div-href').classList.add('d-none')
        document.getElementById('div-dropdown-parent').classList.add('d-none')
        document.getElementById('div-icon').classList.add('d-none')
    }else if(value === 'link'){
        document.getElementById('div-href').classList.remove('d-none')
        document.getElementById('div-dropdown-parent').classList.remove('d-none')
        document.getElementById('div-icon').classList.remove('d-none')
    }else{
        document.getElementById('div-href').classList.add('d-none')
        document.getElementById('div-dropdown-parent').classList.remove('d-none')
        document.getElementById('div-icon').classList.remove('d-none')
    }
}

this.updateSelectParent()
this.toggleDivs()
document.getElementById("menu").onchange = function(){self.updateSelectParent()}
document.getElementById("type").onchange = function(){self.toggleDivs()}



