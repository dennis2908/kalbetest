class CategoryEdit extends React.Component {
  
  constructor(props) {
    super(props);
    this.state = {result: ""};
	this.cekForm = this.cekForm.bind(this);
  }
  
  cekForm(event) {
	let cek = 1;  
	console.log(document.getElementById('Name').value);
	if(!document.getElementById('Type').value.trim().length){
		cek = 0;
		document.getElementById('Type').focus();	
		
	}
	if(!document.getElementById('image').value.trim().length){
		cek = 0;
		document.getElementById('image').focus();	
		
	}
	if(!document.getElementById('Name').value.trim().length){
		cek = 0;
		document.getElementById('Name').focus();	
		
	}
	if(cek==0)
		 event.preventDefault();
	 
  } 

	render() {
		
	return (<input type="submit" name="updateButton"  className="btn btn-success mr-2" onClick={this.cekForm} id="updateButton" value="UPDATE" />);
  }
}


ReactDOM.render(<CategoryEdit/>, 
                document.getElementById('form_category'));