class CategoryAdd extends React.Component {
  
  constructor(props) {
    super(props);
	this.nameValue = ""; 
	this.typeValue = ""; 
	this.imageValue = "";
    this.state = {result: ""};
	this.cekForm = this.cekForm.bind(this);
	this.changeNameValue = this.changeNameValue.bind(this);
	this.changeTypeValue = this.changeTypeValue.bind(this);
	this.changeImageValue = this.changeImageValue.bind(this);
  }
  
  cekForm(event) {
	let cek = 1;  
	if(!this.typeValue.trim().length){
		cek = 0;
		document.getElementById('type').focus();	
		
	}
	if(!this.imageValue.trim().length){
		cek = 0;
		document.getElementById('image').focus();	
		
	}
	if(!this.nameValue.trim().length){
		cek = 0;
		document.getElementById('name').focus();	
		
	}
	if(cek==0)
		 event.preventDefault();
	
  } 
  
  changeNameValue(event) {
	this.nameValue = event.target.value;
	
  }
  changeImageValue(event) {
	this.imageValue = event.target.value;
	
  }
  changeTypeValue(event) {
	this.typeValue = event.target.value;	
  }
  
  prosesPengurutan(){
	  var posisi;
	  var posisi1;
	  var posisi2;
	  var cek,adaCek;
	 for(var i=0;i<this.inputArray.length;i++){	
	   cek = this.inputArray[i];
	   adaCek = false;
	   for(var j=i;j<this.inputArray.length;j++){		
	     if(parseInt(cek)>parseInt(this.inputArray[j])){
			 cek = this.inputArray[j];
			 posisi=j;	
             adaCek = true;			 
		 }
	   }
	   if(adaCek){
			 posisi1 = this.inputArray[i];
			 posisi2 = this.inputArray[posisi];
			 this.inputArray[posisi] = posisi1;
			 this.inputArray[i] = posisi2;
		}
	}
	
	
    return this.theResult(this.inputArray);
  }
  
  theResult(arr){  
	return "Hasil Pengurutan : "+this.inputArrayx.toString()+" => "+arr.toString();
  }

  myChange(event) {
	var keynum
    if(window.event) {// IE8 and earlier
       keynum = event.keyCode;
    } else if(event.which) { // IE9/Firefox/Chrome/Opera/Safari
       keynum = event.which;
    } else {
       keynum = 0;
    }

    if(keynum === 8 || keynum === 0 || keynum === 9 || keynum === 188) {
        return;
    }
    if(keynum < 46 || keynum > 57 || keynum === 47) {
        event.preventDefault();
    } 
  } 

	render() {
		
	return (<div>
						<div className="form-group row">
                            <label htmlFor="name" className="col-sm-3 col-form-label">Name</label>
                            <div className="col-sm-9">
								<input type="text" className="form-control" onChange={this.changeNameValue} onKeyPress={this.changeNameValue} name="name" id="name" placeholder="Enter Category Name"/>
                            </div>
                        </div>
						<div className="form-group row">
                            <label htmlFor="image" className="col-sm-3 col-form-label">Image</label>
                            <div className="col-sm-9">
                               <input type="file" name="image" id="image" onChange={this.changeImageValue} className="form-control"/>
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="type" className="col-sm-3 col-form-label">Category Type</label>
                            <div className="col-sm-9">
                                <input type="text" className="form-control" onChange={this.changeTypeValue} onKeyPress={this.changeTypeValue} name="type" id="type" placeholder="Enter Category Type"/>
                            </div>
                        </div>
                        <button type="submit" className="btn btn-success mr-2" onClick={this.cekForm}>Submit</button>
						</div>
    );
  }
}


ReactDOM.render(<CategoryAdd/>, 
                document.getElementById('form_category'));