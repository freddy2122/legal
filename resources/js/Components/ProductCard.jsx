import { useState } from 'react';
import { FaEdit, FaTrash } from 'react-icons/fa';
import axios from 'axios';

export default function ProductCard({ product }) {
    const [showEditModal, setShowEditModal] = useState(false);
    const [showDeleteModal, setShowDeleteModal] = useState(false);
    const [productName, setProductName] = useState(product.name);
    const [productPrice, setProductPrice] = useState(product.price);
    const [productDescription, setProductDescription] = useState(product.description);
    const [productImage, setProductImage] = useState(null);

    const [showConfirm, setShowConfirm] = useState(false);
    const [showSuccessPopup, setShowSuccessPopup] = useState(false);

    // Fonction pour modifier un produit
    const handleUpdate = () => {
        const formData = new FormData();
        formData.append('name', productName);
        formData.append('price', productPrice);
        formData.append('description', productDescription);

        if (productImage) {
            formData.append('image', productImage);
        }

        // Log des données envoyées
        console.log('Données envoyées :', {
            name: productName,
            price: productPrice,
            description: productDescription,
            image: productImage ? productImage.name : null,
        });

        // Utilisation de la méthode POST pour mettre à jour
        axios.post(`/products/${product.id}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data', // Indiquer que le corps est en FormData
                '_method': 'PUT' // Indiquer que c'est une mise à jour, bien que la méthode soit POST
            },
        })
            .then(response => {
                
                setShowEditModal(false);
            })
            .catch(error => {
                console.error('Erreur:', error.response.data);
                if (error.response.data.errors) {
                    alert('Erreur de validation : ' + Object.values(error.response.data.errors).join(', '));
                } else {
                    alert('Erreur lors de la mise à jour.');
                }
            });
    };


    
    const handleDelete = async () => {
        try {
            await axios.delete(`/products/${product.id}`);
            setShowConfirm(false);
            setShowSuccessPopup(true);

            // Cacher le popup après 3 secondes
            setTimeout(() => {
                setShowSuccessPopup(false);
                window.location.reload(); // Rafraîchir la page après suppression
            }, 3000);
        } catch (error) {
            console.error("Erreur lors de la suppression :", error);
        }
    };

    return (
        <div className="bg-white shadow-md rounded-lg p-4">
            <img src={`/${product.image}`} alt={product.name} className="w-full h-32 object-cover rounded-md" />
            <h3 className="mt-2 text-lg font-semibold text-gray-900">{product.name}</h3>
            <p className="text-gray-600">Prix: {product.price} €</p>
            <p>
                Description: {product.description.length > 50 ? product.description.slice(0, 50) + "..." : product.description}
            </p>
            <div className="flex justify-between mt-2">
                <button className="text-blue-500" onClick={() => setShowEditModal(true)}><FaEdit /></button>
                <button className="text-red-500"  onClick={() => setShowConfirm(true)}><FaTrash /></button>
            </div>

            {/* Modal d'édition */}
            {showEditModal && (
                <div className="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                    <div className="bg-white p-6 rounded-lg">
                        <h2 className="text-xl mb-4">Modifier le produit</h2>
                        <label className="block">Nom</label>
                        <input
                            type="text"
                            value={productName}
                            onChange={(e) => setProductName(e.target.value)}
                            className="border p-2 mb-4 w-full"
                        />
                        <label className="block">Prix</label>
                        <input
                            type="number"
                            value={productPrice}
                            onChange={(e) => setProductPrice(e.target.value)}
                            className="border p-2 mb-4 w-full"
                        />
                        <label className="block">Description</label>
                        <textarea
                            value={productDescription}
                            onChange={(e) => setProductDescription(e.target.value)}
                            className="border p-2 mb-4 w-full"
                        />
                        <label className="block">Image</label>
                        <input
                            type="file"
                            onChange={(e) => setProductImage(e.target.files[0])}
                            className="border p-2 mb-4 w-full"
                        />
                        <div className="flex justify-end mt-4">
                            <button onClick={() => setShowEditModal(false)} className="mr-2 text-gray-500">Annuler</button>
                            <button onClick={handleUpdate} className="text-blue-500">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            )}

            {/* Modal de suppression */}
            {showConfirm && (
                <div className="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                    <div className="bg-white p-6 rounded-lg">
                        <h2 className="text-xl mb-4">Confirmer la suppression</h2>
                        <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
                        <div className="flex justify-end mt-4">
                            <button onClick={() => setShowConfirm(false)} className="mr-2 text-gray-500">Annuler</button>
                            <button  onClick={handleDelete} className="text-red-500">Supprimer</button>
                        </div>
                    </div>
                </div>
            )}
        </div>
    );
}
