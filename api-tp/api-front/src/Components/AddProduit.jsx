import axios from "axios";
import React, { useEffect, useState } from "react";
function AddProduit() {
    const [produit, setProduit] = useState({
        "libelle": '',
        "prix": 0,
        "stock": 0,
        "idCategorie": 0
    })
    const [message, setMessage] = useState();
    const [errerstyle, setErreurstyle] = useState({ "background": "#000", "color": "#fff" })

    const getValue = (e) => {
        setProduit(prevProduit => ({
            ...prevProduit,
            [e.target.name]: e.target.value
        }))
    }
    const [categories, setCategories] = useState([{}])
    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/listeCategories").then((res) => {
            setCategories(res.data)
        })
    }, []);

    const add = async () => {
        if (produit.libelle != '' && produit.prix != '' && produit.stock != '' && produit.idCategorie != '') {

            axios.post("http://127.0.0.1:8000/api/ajouterProduit", produit).then((res) => {

                if (res.status == 200) {
                    setMessage("bien ajouter")
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
            <legend>Add new produit</legend>
            <table className="table">
                <tr>
                    <td>libelle</td>
                    <td><input type="text" name="libelle" onChange={getValue} /></td>
                </tr>
                <tr>
                    <td>prix</td>
                    <td><input type="number" name="prix" onChange={getValue} /></td>
                </tr>

                <tr>
                    <td>stock</td>
                    <td><input type="number" name="stock" onChange={getValue} /></td>
                </tr>
                <tr>
                    <td>idCategorie</td>
                    <td>
                        <select name="idCategorie" onChange={getValue}>
                            <option value="">Choisisser une categorie</option>
                            {categories.map((c) => {
                                return (
                                    <option value={c.idCategorie}>{c.nom}</option>
                                )
                            })}

                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" onClick={add} value="Save" className="btn btn-success" /></td>
                </tr>
            </table>
            <span style={errerstyle}> {message}</span>
        </fieldset></div>

    );

}

export default AddProduit;