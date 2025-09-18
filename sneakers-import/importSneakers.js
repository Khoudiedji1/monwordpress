import "dotenv/config";
import fetch from "node-fetch";
import SneaksAPI from "sneaks-api";

const sneaks = new SneaksAPI();

// 🔑 Identifiants WooCommerce
const WC_URL = process.env.WC_URL;
const WC_KEY = process.env.WC_KEY;
const WC_SECRET = process.env.WC_SECRET;

// Fonction pour ajouter un produit WooCommerce
async function addProduct(product) {
  try {
    const res = await fetch(
      `${WC_URL}/wp-json/wc/v3/products?consumer_key=${WC_KEY}&consumer_secret=${WC_SECRET}`,
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          name: product.shoeName,
          type: "simple",
          regular_price: (product.retailPrice || 100).toString(),
          description: `${product.silhouette || ""} - ${product.colorway || ""}`,
          categories: [{ name: product.brand || "Sneakers" }],
          images: product.thumbnail ? [{ src: product.thumbnail }] : [],
          stock_quantity: 10,
        }),
      }
    );

    const data = await res.json();
    if (res.ok) {
      console.log(`✅ Produit ajouté : ${data.name}`);
    } else {
      console.error("❌ Erreur WooCommerce :", data);
    }
  } catch (err) {
    console.error("❌ Erreur réseau :", err);
  }
}

// Exemple : importer 5 Air Force 1
sneaks.getProducts("Air Force 1", 5, async (err, products) => {
  if (err) return console.error("❌ Erreur Sneaks API :", err);

  for (const p of products) {
    await addProduct(p);
    await new Promise((resolve) => setTimeout(resolve, 1000)); // pause pour éviter le spam
  }
});

