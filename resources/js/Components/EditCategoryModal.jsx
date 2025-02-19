import { useState } from 'react';
import axios from 'axios';

export default function EditCategoryModal({ category, onClose }) {
    const [name, setName] = useState(category.name);
    const [image, setImage] = useState(null);

    const handleSubmit = async (e) => {
        e.preventDefault();
        const formData = new FormData();
        formData.append('name', name);
        if (image) {
            formData.append('image', image);
        }

        try {
            await axios.post(`/categories/${category.id}`, formData);
            onClose();
            window.location.reload(); // Rafraîchir la page après modification
        } catch (error) {
            console.error("Erreur lors de la mise à jour :", error);
        }
    };

    return (
        <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-10">
            <div className="bg-white p-6 rounded-md shadow-lg w-96">
                <h2 className="text-lg font-semibold mb-4">Modifier la catégorie</h2>
                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label className="block text-sm font-medium">Nom</label>
                        <input 
                            type="text" 
                            value={name} 
                            onChange={(e) => setName(e.target.value)}
                            className="w-full p-2 border rounded"
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block text-sm font-medium">Image</label>
                        <input 
                            type="file" 
                            onChange={(e) => setImage(e.target.files[0])}
                            className="w-full p-2 border rounded"
                        />
                    </div>
                    <div className="flex justify-end space-x-2">
                        <button 
                            type="button" 
                            className="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400"
                            onClick={onClose}
                        >
                            Annuler
                        </button>
                        <button 
                            type="submit" 
                            className="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700"
                        >
                            Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}
