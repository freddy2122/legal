import { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import CategoryCard from '@/Components/CategoryCard';
import CategoryModal from '@/Components/CategoryModal';

export default function Categories({ auth, categories }) {
    const [showModal, setShowModal] = useState(false);

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Catégories" />

            <div className="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="flex justify-between items-center mb-4">
                    <h2 className="text-2xl font-bold text-gray-800">Liste des catégories</h2>
                    <button 
                        className="bg-blue-500 text-white px-4 py-2 rounded shadow" 
                        onClick={() => setShowModal(true)}
                    >
                        + Ajouter une catégorie
                    </button>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
                    {categories.map(category => (
                        <CategoryCard key={category.id} category={category} />
                    ))}
                </div>
            </div>

            {showModal && <CategoryModal onClose={() => setShowModal(false)} />}
        </AuthenticatedLayout>
    );
}
