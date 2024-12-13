import axios from "axios";
import React, { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
function EditProduit() {
    const location = useLocation();
    const [produit, setProduit] = useState(location.state.produit)
    const [message, setMessage] = useState();
    const [errerstyle, setErreurstyle] = useState({ "background": "#000", "color": "#fff" })

    const getValue = (e) => {
        setProduit(prevProduit => ({
            ...prevProduit,
            [e.target.name]: e.target.value
        }))
    }
    const [categories, setCategories] = useState([])
    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/listeCategories").then((res) => {
            setCategories(res.data)
        })
    }, []);

    const edit = () => {
        if (produit.libelle != '' && produit.prix != '' && produit.stock != '' && produit.idCategorie != '') {

            axios.post("http://127.0.0.1:8000/api/modifierProduit/" + produit.ID_Produit, produit).then((res) => {

                if (res.status == 200) {
                    setMessage("bien modifié")
                    setErreurstyle({ "background": "green", "color": "#fff" })

                }
                else {
                    setMessage("Erreur du BackEnd")
                    setErreurstyle({ "background": "red", "color": "#fff" })
                }
            })
        }
        else {
            setMessage('Erreur tout les champs sont obligatoires')
            setErreurstyle({ "background": "red", "color": "#fff" })

        }

    }
    return (

        <div><fieldset>
            <legend>Edit produit</legend>
            <table className="table">
                <tr>
                    <td>libelle</td>
                    <td><input type="text" name="libelle" onChange={getValue} value={produit.libelle} /></td>
                </tr>
                <tr>
                    <td>prix</td>
                    <td><input type="number" name="prix" onChange={getValue} value={produit.prix} /></td>
                </tr>

                <tr>
                    <td>stock</td>
                    <td><input type="number" name="stock" onChange={getValue} value={produit.stock} /></td>
                </tr>
                <tr>
                    <td>idCategorie</td>
                    <td>
                        <select name="idCategorie" onChange={getValue}>
                            <option value="">Choisisser une categorie</option>
                            {categories.map((c) => {
                                return (
                                    <option value={c.idCategorie} selected={c.idCategorie === produit.idCategorie} >{c.nom}</option>
                                )
                            })}

                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" onClick={edit} value="Edit" className="btn btn-success" /></td>
                </tr>
            </table>
            <span style={errerstyle}> {message}</span>
        </fieldset></div>

    );

}

export default EditProduit;