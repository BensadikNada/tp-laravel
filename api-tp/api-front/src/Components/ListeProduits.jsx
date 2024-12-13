import React, { Component, useEffect, useState } from "react";
import axios, { Axios } from "axios";
import { useNavigate } from "react-router-dom";

export default function ListeProduits() {
    const [errorsupprimer, setErrorsupprimer] = useState("")
    const [produits, setProduits] = useState([{}])
    const navigate= useNavigate();

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/listeProduits").then((res) => {
            setProduits(res.data)
        })
    }, []);

    const supprimer = (id) => {
        axios.delete("http://127.0.0.1:8000/api/produits/" + id).then((res) => {
            if (res.status == 200) {
                const listReste = produits.filter(item => (item.idProduit != id));
                setProduits(listReste);
            }
            else {
                setErrorsupprimer("<span style='color:red'>Erreur de suppression</span>");
            }

        }).catch((error) => {
            console.error("Error during deletion:", error);
            setErrorsupprimer("<span style='color:red'>Erreur de suppression</span>");
        });
    }

    const modifier=(p)=>{
        navigate('/modifierProduit',{state :{produit : p}})
    }

    return (
        <div>

            <table className="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Quantite stock</th>
                        <th>Categorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {produits.map((p) => {
                        return (
                            <tr key={p.idProduit}>
                                <td>{p.idProduit}</td>
                                <td>{p.nom}</td>
                                <td>{p.prix}</td>
                                <td>{p.qteStock}</td>
                                <td>{p.idCategorie}</td>
                                <td>
                                    <button onClick={() => { supprimer(p.idProduit) }}>Supprimer</button>
                                    <button onClick={()=>{modifier(p)}} >Modifier</button>
                                </td>
                            </tr>
                        )
                    })}
                </tbody>
            </table>
        </div>)
}