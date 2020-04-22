import React from 'react'






class Display extends React.Component{
    constructor(props) {
        super(props);
    }













    
    render(){
    
        return(
            <div>
                <p>Comment</p>
                <form>
                    <div className="form-group">
                        <label>Comment:</label>
                        <input
                            type="text"
                            className="form-control"
                        />
                    </div>

                    <div className="form-group">
                        <input
                            type="submit"
                            value="Comment"
                            className="btn btn-primary"
                        />
                    </div>
                </form>   
           
           </div>
        );
    }
}
export default Display;