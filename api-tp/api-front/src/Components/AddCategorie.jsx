import axios from "axios";
import React, { Component, useState } from "react";
function AddCategorie() {
    const [categorie, setCategorie] = useState({
        "nom": '',
        "description": '',
    })
    const [message, setMessage] = useState();
    const [errerstyle, setErreurstyle] = useState({ "background": "#000", "color": "#fff" })

    const getValue = (e) => {
        setCategorie(prevcategorie => ({
            ...prevcategorie,
            [e.target.name]: e.target.value
        }))
    }

    const add = () => {
        if (categorie.nom != '' && categorie.description != '') {

            axios.post("http://127.0.0.1:8000/api/ajouterCategorie", categorie).then((res) => {

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
            <legend>Add new Categorie</legend>
            <table className="table">
                <tr>
                    <td>nom</td>
                    <td><input type="text" name="nom" onChange={getValue} /></td>
                </tr>
                <tr>
                    <td>description</td>
                    <td><input type="text" name="description" onChange={getValue} /></td>
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

export default AddCategorie;