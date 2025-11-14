import { base_url } from "../components/api";
import { APP_URL } from "../components/api";
const BASE_URL = import.meta.env.VITE_API_URL || base_url;

async function apiRequest(endpoint, method = "GET", payload = null) {
  try {
    const options = {
      method,
      headers: {
        "Content-Type": "application/json",
        Authorization:
          "Bearer b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14",
      },
    };

    if (payload) {
      options.body = JSON.stringify(payload);
    }

    const res = await fetch(`${BASE_URL}${endpoint}`, options);
    const data = await res.json();

    return { res, data };
  } catch (error) {
    console.error("API Error:", error);
    throw error;
  }
}

export default apiRequest;
