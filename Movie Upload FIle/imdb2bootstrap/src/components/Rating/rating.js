import React from 'react'






class Display extends React.Component{
    constructor(props) {
        super(props);
    }













    
    render(){
    
        return(
            <div>
                <p>Rate</p>
                <form>
                <div className="form-group">
                        <label>Rate</label>
                          <select id = "myList">
                            <option value = "1">1</option>
                            <option value = "2">2</option>
                            <option value = "3">3</option>
                            <option value = "4">4</option>
                            <option value = "5">5</option>
                          </select>
                    </div>

                    <div className="form-group">
                        <input
                            type="submit"
                            value="Rate"
                            className="btn btn-primary"
                        />
                    </div>
                </form>   
           
           </div>
        );
    }
}
export default Display;