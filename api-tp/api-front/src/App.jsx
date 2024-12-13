import './App.css'
import { Route, Routes, BrowserRouter } from 'react-router-dom'
import ListeProduits from './Components/ListeProduits'
import AddProduit from './Components/AddProduit'
import ListeCategories from './Components/ListeCategories'
import EditProduit from './Components/EditProduit'
import EditCategorie from './Components/EditCategorie'
import AddCategorie from './Components/AddCategorie'
// import ListeProduits from './ProduitsApi/listeProduits/listeProduits';

function App() {

  return (
    <>
      <BrowserRouter>
        <table className='table'>
          <tr>
            {/* <td><a href="/produits">Listes produits</a></td>
            <td><a className='btn btn-warning' href="/ajouterProduit">Ajouter produit</a></td> */}
            <td><a className='btn btn-warning' href="/categories">Listes Categories</a></td>
            <td><a className='btn btn-warning' href="/ajouterCategorie">Ajouter Categorie</a></td>
          </tr>
        </table>
        <Routes>
          {/* <Route path='/produits' element={<ListeProduits />} /> */}
          {/* <Route path='/ajouterProduit' element={<AddProduit />} /> */}
          <Route path='/categories' element={<ListeCategories />} />
          <Route path='/ajouterCategorie' element={<AddCategorie />} />
          {/* <Route path='/modifierProduit' element={<EditProduit />} /> */}
          <Route path='/modifierCategorie' element={<EditCategorie />} />
        </Routes>
      </BrowserRouter>
    </>
  )
}

export default App
