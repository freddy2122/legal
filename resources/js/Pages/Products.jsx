import { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import ProductCard from '@/Components/ProductCard';
import ProductModal from '@/Components/ProductModal';

export default function Products({ auth, products, categories }) {
    const [showModal, setShowModal] = useState(false);

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Produits" />

            <div className="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <button className="bg-blue-500 text-white px-4 py-2 rounded" onClick={() => setShowModal(true)}>
                    + Ajouter un produit
                </button>

                <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    {products.map(product => (
                        <ProductCard key={product.id} product={product} />
                    ))}
                </div>
            </div>

            {showModal && <ProductModal categories={categories} onClose={() => setShowModal(false)} />}
        </AuthenticatedLayout>
    );
}
