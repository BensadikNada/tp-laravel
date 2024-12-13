import axios from "axios";
import React, {  useState } from "react";
import { useLocation } from "react-router-dom";

function EditCategorie() {
const location = useLocation();
const [categorie,setCategorie]=useState(location.state.categorie)
  const [message,setMessage]=useState();
  const [errerstyle,setErreurstyle]=useState({"background":"#000","color":"#fff"})
 
  const getValue=(e)=>{
    setCategorie(prevcategorie=>({
      ...prevcategorie,
      [e.target.name]:e.target.value
    }))
  }

  const edit=()=>{
if( categorie.nom!='' && categorie.description!='' )
{

  axios.post("http://127.0.0.1:8000/api/modifierCategorie/"+categorie.idCategorie,categorie).then((res)=>{
   
   if(res.status==200)
   {
    setMessage("bien modifiée")
    setErreurstyle({"background":"green","color":"#fff"})

   }
   else
   {
    setMessage("Erreur du BackEnd")
    setErreurstyle({"background":"red","color":"#fff"})
   }
})
}
else
{
  setMessage('Erreur tout les champs sont obligatoires')
  setErreurstyle({"background":"red","color":"#fff"})

}

  }
    return(

     <div><fieldset>
      <legend>Modifier  Categorie</legend>
      <table className="table">
        <tr>
          <td>nom</td>
          <td><input type="text"  name="nom" onChange={getValue} value={categorie.nom}/></td>
        </tr>
        <tr>
          <td>description</td>
          <td><input type="text"  name="description"  onChange={getValue} value={categorie.description}/></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="button" onClick={edit} value="Modifier" className="btn btn-success"/></td>
        </tr>
      </table>
     <span style={errerstyle}> {message}</span>
      </fieldset></div>
     
     );
 
}

export default EditCategorie;