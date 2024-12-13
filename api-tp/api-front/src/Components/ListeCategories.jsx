import React, { useEffect, useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function ListeCategories() {
    const navigate = useNavigate();
    // const [categories, setCategories] = useState([{}]);
    const [categories, setCategories] = useState([]);
    const [currentPage, setCurrentPage] = useState(1);
    const [totalPages, setTotalPages] = useState(1);
    useEffect(() => {
        fetchCategories();
    }, [currentPage]);
    const fetchCategories = async () => {
        try {
            const response = await axios.get(`http://127.0.0.1:8000/api/listeCategories?page=${currentPage}`);
            setCategories(response.data.data);
            setTotalPages(response.data.last_page);
        } catch (error) {
            console.error('Error fetching categories: ', error);
        }
    };
    const [errorsupprimer, setErrorsupprimer] = useState("")
    const supprimer = (id) => {
        axios.delete("http://127.0.0.1:8000/api/categories/" + id).then((res) => {
            if (res.status == 200) {
                const listReste = categories.filter(item => (item.idCategorie != id))
                setCategories(listReste)


            }
            else {
                setErrorsupprimer("<span style='color:red'>Erreur de suppression</span>");
            }

        })
    }
    const edit = (c) => {
        navigate('/modifierCategorie', { state: { categorie: c } })
    }
    const nextPage = () => {
        setCurrentPage(currentPage + 1);
    };

    const prevPage = () => {
        setCurrentPage(currentPage - 1);
    };

    return (<div>

        <table className="table" border={1}>
            <thead>
                <th>idCategorie</th>
                <th>nom</th>
                <th>description</th>
            </thead>
            <tbody>
                {categories.map((c) => {
                    return (
                        <tr>
                            <td>{c.idCategorie}</td>
                            <td>{c.nom}</td>
                            <td>{c.description}</td>
                            <td>
                                <button onClick={() => { supprimer(c.idCategorie) }} className="btn btn-danger">Supprimer</button>
                                <button onClick={() => { edit(c) }} className="btn btn-primary">Modifier</button>
                            </td>
                        </tr>
                    )
                })}
            </tbody>
        </table>

        <div>
            <button onClick={prevPage} disabled={currentPage === 1}>Previous</button>
            <span>Page {currentPage} of {totalPages}</span>
            <button onClick={nextPage} disabled={currentPage === totalPages}>Next</button>
        </div>
    </div>)
}