import { useState } from 'react';
import { FaEdit, FaTrash } from 'react-icons/fa';
import EditCategoryModal from '@/Components/EditCategoryModal';
import axios from 'axios';

export default function CategoryCard({ category }) {
    const [showEditModal, setShowEditModal] = useState(false);
    const [showConfirm, setShowConfirm] = useState(false);
    const [showSuccessPopup, setShowSuccessPopup] = useState(false);

    // Fonction de suppression avec confirmation
    const handleDelete = async () => {
        try {
            await axios.delete(`/categories/${category.id}`);
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
        <div className="relative bg-white shadow-md rounded-lg p-4">
            <img src={`/${category.image}`} alt={category.name} className="w-full h-32 object-cover rounded-md"/>
            <h3 className="mt-2 text-lg font-semibold text-gray-900">{category.name}</h3>

            {/* Boutons Modifier et Supprimer */}
            <div className="flex justify-end mt-2 space-x-2">
                <button 
                    className="text-blue-500 hover:text-blue-700"
                    onClick={() => setShowEditModal(true)}
                >
                    <FaEdit size={18} />
                </button>
                <button 
                    className="text-red-500 hover:text-red-700"
                    onClick={() => setShowConfirm(true)}
                >
                    <FaTrash size={18} />
                </button>
            </div>

            {/* Modal d'édition */}
            {showEditModal && <EditCategoryModal category={category} onClose={() => setShowEditModal(false)} />}

            {/* Confirmation de suppression */}
            {showConfirm && (
                <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-10">
                    <div className="bg-white p-6 rounded-md shadow-lg">
                        <h2 className="text-lg font-semibold mb-4">Confirmer la suppression</h2>
                        <p>Voulez-vous vraiment supprimer cette catégorie ?</p>
                        <div className="mt-4 flex justify-end space-x-2">
                            <button 
                                className="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400"
                                onClick={() => setShowConfirm(false)}
                            >
                                Annuler
                            </button>
                            <button 
                                className="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700"
                                onClick={handleDelete}
                            >
                                Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            )}

            {/* Popup de succès */}
            {showSuccessPopup && (
                <div className="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg">
                    Catégorie supprimée avec succès !
                </div>
            )}
        </div>
    );
}
