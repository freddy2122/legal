import { useState } from 'react';
import { useForm } from '@inertiajs/react';

export default function CategoryModal({ onClose }) {
    const [isOpen, setIsOpen] = useState(true);
    const { data, setData, post, errors, reset } = useForm({
        name: '',
        image: null
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post(route('categories.store'), {
            onSuccess: () => {
                reset();
                setIsOpen(false);
                onClose();
            }
        });
    };

    return isOpen ? (
        <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div className="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 className="text-xl font-semibold mb-4">Ajouter une catégorie</h2>
                <form onSubmit={handleSubmit} encType="multipart/form-data">
                    <div>
                        <label className="block text-sm font-medium">Nom de la catégorie</label>
                        <input
                            type="text"
                            className="w-full border rounded p-2"
                            value={data.name}
                            onChange={(e) => setData('name', e.target.value)}
                            required
                        />
                        {errors.name && <p className="text-red-500 text-sm">{errors.name}</p>}
                    </div>

                    <div className="mt-4">
                        <label className="block text-sm font-medium">Image</label>
                        <input
                            type="file"
                            className="w-full border rounded p-2"
                            onChange={(e) => setData('image', e.target.files[0])}
                            required
                        />
                        {errors.image && <p className="text-red-500 text-sm">{errors.image}</p>}
                    </div>

                    <div className="mt-6 flex justify-between">
                        <button type="button" onClick={() => setIsOpen(false)} className="bg-gray-500 text-white px-4 py-2 rounded">
                            Annuler
                        </button>
                        <button type="submit" className="bg-blue-500 text-white px-4 py-2 rounded">
                            Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    ) : null;
}
